<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //Check if the user is authenticated
        if (!$request->session()->has('user')) {
            return redirect()->route('login');
        }
        // Check if the user is an admin
        if ($request->session()->get('user')->role === 'admin') {
            $request->attributes()->add(['isAdmin' => true]);
            return $next($request);
        }
        // Check if the user is a patient
        if ($request->session()->get('user')->role === 'patient') {
            $request->attributes()->add(['isPatient' => true]);
            return $next($request);
        }
        // If the user's role is not recognized, deny access
        abort(403, 'Forbidden');
    }
}
