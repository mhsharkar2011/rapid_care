<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pageLimit = $request->per_page ?? 15;
        $data = [];
        $data['users'] = User::with('doctor','patient','employee')->latest()->paginate($pageLimit);
        $data['totalUsers'] = User::all()->count();
        // $data['totalDoctors'] = Doctor::where('role_id','1')->count();

        return view('admin.users.index', $data)->with('id',(request()->input('page', 1) - 1) * $pageLimit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Register Page";
        $data['roles'] = Role::all();
        return view('admin.users.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator =  Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' =>'required|confirmed'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $patient = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'type' => $request->input('type'),
            'status' => $request->input('status'),
            'password' => Hash::make($request->input('password')),
        ]);
        Auth::login($patient);
        $credentails = $request->only('email', 'password');

        if(Auth::attempt($credentails)){
            return redirect()->route('admin.users.index')->with('success', 'User Added Successfully');
        }else{
            return redirect()->route('login');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $input = $request->except('avatar');
        // dd($input);
        if ($user->avatar && $request->hasFile('avatar')) {
            Storage::delete('public/avatars/' . $user->avatar);
            $user->avatar = null;
        }

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = $user->id . '-' . $user->name . '-' . date('Ymd') . '.' . $avatar->getClientOriginalExtension();
            $avatar->storeAs('public/avatars', $filename);
            $user->avatar = $filename;
            $user->save();
        }
        $user->update($input);
        
        return redirect()->route('admin.users.index')->with('success', 'User Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User Deleted Successfully');
    }

    public function updateStatus(Request $request, User $user)
    {
            $status = $request->status;
            if($status == 'ACTIVE' || $status == 'INACTIVE'){
            $user->status = $status;
            $user->save();
                return redirect()->back()->with('status', 'Status has been updated.');
            }else{
                return redirect()->with('error','Invalid Status');
        }
    }

    public function userAccess(Request $request)
    {
        $pageLimit = $request->per_page ?? 15;
        $roles = Role::orderBy('id','DESC')->paginate($pageLimit);
        $permissions = Permission::orderBy('id','DESC')->paginate($pageLimit);
        return view('auth.user-access',compact('roles','permissions'))
            ->with('i', ($request->input('page', 1) - 1) * $pageLimit);
    }
}
