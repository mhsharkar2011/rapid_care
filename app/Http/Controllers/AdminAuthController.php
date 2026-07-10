<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Employee;
use App\Models\Doctor;

class AdminAuthController extends Controller
{
    /**
     * Show the admin login form.
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Handle an admin login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user->isAdmin()) {
                return redirect()->route('admin.dashboard')
                    ->with('success', 'Welcome back, ' . $user->name . '!');
            }

            Auth::logout();
            return back()->withErrors([
                'email' => 'You do not have admin access.',
            ])->onlyInput('email');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Show the admin registration form.
     *
     * @return \Illuminate\View\View
     */
    public function register()
    {
        return view('auth.register');
    }

    /**
     * Handle an admin registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registerStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => true,
            'role' => 'admin',
        ]);

        Auth::login($user);

        return redirect()->route('admin.dashboard')
            ->with('success', 'Account created successfully! Welcome to Rapid Care Admin.');
    }

    /**
     * Log the admin out.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')
            ->with('success', 'You have been logged out successfully.');
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        // Get counts with safe handling
        $totalEmployees = Employee::count();
        $totalPatients = Patient::count();
        $totalAppointments = Appointment::count();
        $totalDoctors = Doctor::count();
        $totalUsers = User::count();
        $totalAdmins = User::where('is_admin', true)->count();
        $newUsersToday = User::whereDate('created_at', today())->count();
        $newPatientsToday = Patient::whereDate('created_at', today())->count();
        $todayAppointments = Appointment::whereDate('created_at', today())->count();

        // Safe financial calculations with fallbacks
        try {
            // Check if amount column exists
            $hasAmountColumn = Schema::hasColumn('appointments', 'amount');

            if ($hasAmountColumn) {
                $totalEarnings = Appointment::sum('amount') ?? 0;
            } else {
                // Fallback: Calculate from service_fee or use a default
                $totalEarnings = Appointment::sum('service_fee') ?? 0;
            }
        } catch (\Exception $e) {
            // If column doesn't exist, use 0
            $totalEarnings = 0;
        }

        // Calculate cost (salary sum) with safe handling
        try {
            $totalCost = Employee::sum('salary') ?? 0;
        } catch (\Exception $e) {
            $totalCost = 0;
        }

        // Calculate profit
        $totalProfit = $totalEarnings - $totalCost;

        // Get appointment status counts
        $appointmentStatuses = [
            'scheduled' => Appointment::where('status', 'scheduled')->count(),
            'completed' => Appointment::where('status', 'completed')->count(),
            'cancelled' => Appointment::where('status', 'cancelled')->count(),
            'no-show' => Appointment::where('status', 'no-show')->count(),
        ];

        // Get payment status counts (if column exists)
        $paymentStatuses = [];
        try {
            if (Schema::hasColumn('appointments', 'payment_status')) {
                $paymentStatuses = [
                    'pending' => Appointment::where('payment_status', 'pending')->count(),
                    'paid' => Appointment::where('payment_status', 'paid')->count(),
                    'partial' => Appointment::where('payment_status', 'partial')->count(),
                    'refunded' => Appointment::where('payment_status', 'refunded')->count(),
                ];
            }
        } catch (\Exception $e) {
            $paymentStatuses = [];
        }

        // Pass all variables to the view
        return view('admin.dashboard', compact(
            'totalEmployees',
            'totalPatients',
            'totalAppointments',
            'totalDoctors',
            'totalUsers',
            'totalAdmins',
            'newUsersToday',
            'newPatientsToday',
            'todayAppointments',
            'totalEarnings',
            'totalCost',
            'totalProfit',
            'appointmentStatuses',
            'paymentStatuses'
        ));
    }

    /**
     * Helper to check if column exists in table
     */
    private function hasColumn($table, $column)
    {
        try {
            return \Schema::hasColumn($table, $column);
        } catch (\Exception $e) {
            return false;
        }
    }
}
