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
        if (Auth::check()) {
            return redirect()->route('frontEnd.home');
        } else {
            return view('auth.login');
        }
    }

    public function store(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('frontEnd.appointments.index');
        } else {
            return redirect()->route('frontEnd.login');
        }
    }

    public function registerStore()
    {
       //
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('frontEnd.home');
    }
}
