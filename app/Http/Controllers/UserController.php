<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Helpers\SlNo;
use App\Models\Card;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

use function App\Helpers\PageLimit;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        try {
            $pages = PageLimit(15);
            $users = User::with(['doctor', 'patient', 'employee', 'card'])->latest();

            // Search functionality
            if ($request->filled('search')) {
                $search = $request->input('search');
                $users->where(function ($query) use ($search) {
                    $query->where('name', 'LIKE', "%{$search}%")
                        ->orWhere('email', 'LIKE', "%{$search}%")
                        ->orWhere('roles', 'LIKE', "%{$search}%")
                        ->orWhereHas('card', function ($q) use ($search) {
                            $q->where('card_no', 'LIKE', "%{$search}%");
                        });
                });
            }

            $data = [
                'users' => $users->paginate($pages),
                'totalUsers' => User::count(),
                'activeUsers' => User::where('status', 'Active')->count(),
                'inactiveUsers' => User::where('status', 'Inactive')->count(),
            ];

            return view('admin.users.index', $data)
                ->with('i', ($request->input('page', 1) - 1) * $pages);

        } catch (\Exception $e) {
            Toastr::error('Error loading users: ' . $e->getMessage(), 'Error');
            return back();
        }
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        try {
            $data = [
                'title' => 'Create New User',
                'roles' => ['Admin', 'Doctor', 'Employee', 'Patient'],
                'statuses' => ['Active', 'Inactive'],
            ];
            return view('admin.users.create', $data);
        } catch (\Exception $e) {
            Toastr::error('Error loading create form: ' . $e->getMessage(), 'Error');
            return redirect()->route('admin.users.index');
        }
    }

    /**
     * Store a newly created user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required|string|min:8|confirmed',
                'roles' => 'nullable|string',
                'status' => 'nullable|in:Active,Inactive',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'roles' => $request->input('roles', 'Patient'),
                'status' => $request->input('status', 'Active'),
            ]);

            Toastr::success('User created successfully!', 'Success');
            return redirect()->route('admin.users.index');

        } catch (\Exception $e) {
            Toastr::error('Failed to create user: ' . $e->getMessage(), 'Error');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified user.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\View\View
     */
    public function show(User $user)
    {
        try {
            $user->load(['doctor', 'patient', 'employee', 'card']);
            return view('admin.users.show', compact('user'));
        } catch (\Exception $e) {
            Toastr::error('Error loading user details: ' . $e->getMessage(), 'Error');
            return redirect()->route('admin.users.index');
        }
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\View\View
     */
    public function edit(User $user)
    {
        try {
            $cardNo = Card::where('created_by', $user->id)->first();
            $roles = ['Admin', 'Doctor', 'Employee', 'Patient'];
            $statuses = ['Active', 'Inactive'];

            return view('admin.users.edit', compact('user', 'cardNo', 'roles', 'statuses'));
        } catch (\Exception $e) {
            Toastr::error('Error loading edit form: ' . $e->getMessage(), 'Error');
            return redirect()->route('admin.users.index');
        }
    }

    /**
     * Update the specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email,' . $user->id,
                'password' => 'nullable|string|min:8|confirmed',
                'roles' => 'nullable|string',
                'status' => 'nullable|in:Active,Inactive',
                'card_no' => 'nullable|string|max:20',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            // Prepare update data
            $updateData = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
            ];

            // Update status if provided
            if ($request->has('status')) {
                $updateData['status'] = $request->input('status');
            }

            // Update role if provided
            if ($request->has('roles')) {
                $updateData['roles'] = $request->input('roles');
            }

            // Update password if provided
            if ($request->filled('password')) {
                $updateData['password'] = Hash::make($request->input('password'));
            }

            // Handle avatar upload
            if ($request->hasFile('avatar')) {
                // Delete old avatar if exists
                if ($user->avatar && Storage::exists('public/avatars/' . $user->avatar)) {
                    Storage::delete('public/avatars/' . $user->avatar);
                }

                $avatar = $request->file('avatar');
                $filename = $user->id . '-' . str_replace(' ', '-', $user->name) . '-' . date('Ymd') . '.' . $avatar->getClientOriginalExtension();
                $avatar->storeAs('public/avatars', $filename);
                $updateData['avatar'] = $filename;
            }

            // Update user
            $user->update($updateData);

            // Update card number if provided
            if ($request->has('card_no') && $request->filled('card_no')) {
                $card = Card::where('created_by', $user->id)->first();
                if ($card) {
                    $card->update(['card_no' => $request->input('card_no')]);
                } else {
                    Card::create([
                        'card_no' => $request->input('card_no'),
                        'created_by' => $user->id,
                        'category' => 'Bronze',
                    ]);
                }
            }

            Toastr::success('User updated successfully!', 'Success');
            return redirect()->route('admin.users.index');

        } catch (\Exception $e) {
            Toastr::error('Failed to update user: ' . $e->getMessage(), 'Error');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        try {
            // Delete user avatar if exists
            if ($user->avatar && Storage::exists('public/avatars/' . $user->avatar)) {
                Storage::delete('public/avatars/' . $user->avatar);
            }

            // Delete associated card
            $card = Card::where('created_by', $user->id)->first();
            if ($card) {
                $card->delete();
            }

            $user->delete();
            Toastr::success('User deleted successfully!', 'Success');

        } catch (\Exception $e) {
            Toastr::error('Failed to delete user: ' . $e->getMessage(), 'Error');
        }

        return redirect()->route('admin.users.index');
    }

    /**
     * Update user status.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateStatus(Request $request, User $user)
    {
        try {
            $status = $request->input('status', '');
            $validStatuses = ['Active', 'Inactive'];

            if (!in_array($status, $validStatuses)) {
                Toastr::warning('Invalid status value.', 'Warning');
                return redirect()->back();
            }

            $user->update(['status' => $status]);
            Toastr::success("User status updated to {$status} successfully!", 'Success');

        } catch (\Exception $e) {
            Toastr::error('Failed to update status: ' . $e->getMessage(), 'Error');
        }

        return redirect()->back();
    }

    /**
     * Display user access management page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function userAccess(Request $request)
    {
        try {
            $pageLimit = $request->input('per_page', 15);
            $roles = Role::orderBy('id', 'DESC')->paginate($pageLimit);
            $permissions = Permission::orderBy('id', 'DESC')->paginate($pageLimit);

            return view('auth.user-access', compact('roles', 'permissions'))
                ->with('i', ($request->input('page', 1) - 1) * $pageLimit);

        } catch (\Exception $e) {
            Toastr::error('Error loading user access: ' . $e->getMessage(), 'Error');
            return redirect()->route('admin.dashboard');
        }
    }

    /**
     * Bulk update user statuses.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function bulkUpdateStatus(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'user_ids' => 'required|array',
                'user_ids.*' => 'exists:users,id',
                'status' => 'required|in:Active,Inactive',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $userIds = $request->input('user_ids');
            $status = $request->input('status');

            User::whereIn('id', $userIds)->update(['status' => $status]);

            Toastr::success(count($userIds) . ' users updated successfully!', 'Success');

        } catch (\Exception $e) {
            Toastr::error('Failed to bulk update users: ' . $e->getMessage(), 'Error');
        }

        return redirect()->back();
    }

    /**
     * Export users data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function export(Request $request)
    {
        try {
            $users = User::with(['card'])->get();

            // Create CSV export logic here
            // This is a placeholder for export functionality

            Toastr::success('Users exported successfully!', 'Success');

        } catch (\Exception $e) {
            Toastr::error('Failed to export users: ' . $e->getMessage(), 'Error');
        }

        return redirect()->back();
    }

    /**
     * Create a new user card.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    private function createUserCard(User $user)
    {
        $cardNo = 'RHC' . str_pad($user->id, 6, '0', STR_PAD_LEFT);

        return Card::create([
            'card_no' => $cardNo,
            'created_by' => $user->id,
            'category' => 'Bronze',
        ]);
    }
}
