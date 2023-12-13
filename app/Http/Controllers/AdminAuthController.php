<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check() && $request->user()->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        } else {
            return view('login');
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

        $credentails = $request->only('email', 'password');
        if (Auth::attempt($credentails)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.store');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
