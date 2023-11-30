<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $data['title'] = "Login Page";
        if (Auth::check()) {
            return redirect()->route($this->getDashboard());
        } else {
            return view('admin.login', $data);
        }
    }

    private function getDashboard(){
        $role = Auth::user()->role;

        return match ($role) {
            'Admin' => 'admin.dashboard',
            'Patient' => 'patient.dashboard',
            'Doctor' => 'doctor.dashboard',
            'Employee' => 'employee.dashboard',
            default => 'home', // Adjust the default route as needed
        };
    }

    public function frontEndLogin(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $credentails = $request->only('email', 'password');
        if (Auth::attempt($credentails)) {
            return redirect()->route('frontEnd.appointments.create');
        } else {
            return redirect()->route('frontEnd.login');
        }
    }

    public function adminLogin(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $credentails = $request->only('email', 'password');
        if (Auth::attempt($credentails)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login');
        }
    }


    // Frontend user Registration
    public function register()
    {
        $data['title'] = "Register Page";
        return view('register', $data);
    }

    public function storeRegister(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $patient = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        Auth::login($patient);
        $credentails = $request->only('email', 'password');

        if (Auth::attempt($credentails)) {
            return redirect()->route('frontEnd.appointments.index');
        } else {
            return redirect()->route('login');
        }
    }

    // Admin user Registration
    public function adminRegister()
    {
        $data['title'] = "Register Page";
        return view('register', $data);
    }

    public function adminStoreRegister(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        Auth::login($user);
        $credentails = $request->only('email', 'password');

        if (Auth::attempt($credentails)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('frontEnd.home');
    }
}
