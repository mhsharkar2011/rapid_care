<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['namespace' => 'App\Http\Controllers'], function() {

    // ============================================
    // FRONTEND PUBLIC APIs
    // ============================================
    Route::get('/', function () {
        return view('index');
    })->name('index');

    // Route::prefix('frontEnd')->name('frontEnd.')->group(function () {
    //     // Authentication - Public
    //     Route::get('login', 'AuthController@login')->name('login');
    //     Route::post('login', 'AuthController@store')->name('login.store');
    //     Route::get('register', 'AuthController@register')->name('register');
    //     Route::post('register', 'AuthController@registerStore')->name('register.store');
    //     Route::get('logout', 'AuthController@logout')->name('logout');

        // // Pages
        // Route::get('about', 'frontEndController@about')->name('about');
        // Route::get('doctors', 'frontEndController@doctors')->name('doctors');
        // Route::get('services', 'frontEndController@services')->name('services');
        // Route::get('patients', 'frontEndController@patients')->name('patients');
        // Route::get('contact', 'frontEndController@showContact')->name('showContact');
        // Route::post('contact', 'frontEndController@storeContact')->name('storeContact');

        // // Authenticated Frontend Routes
        // Route::group(['middleware' => ['auth']], function() {
        //     Route::get('appointments', 'AppointmentController@index')->name('appointments.index');
        //     Route::put('appointments/{appointment}/update-status', 'AppointmentController@updateStatus')->name('appointments.update-status');
        //     Route::get('appointments/create', 'AppointmentController@create')->name('appointments.create');
        //     Route::post('appointments/store', 'AppointmentController@store')->name('appointments.store');
        //     Route::get('appointments/{id}', 'AppointmentController@show')->name('appointments.show');
        // });
    // });

    // ============================================
    // BACKEND PUBLIC APIs
    // ============================================
    Route::prefix('admin')->name('admin.')->group(function () {
        // Authentication (Public)
        Route::get('login', 'AdminAuthController@login')->name('login');
        Route::post('login', 'AdminAuthController@loginStore')->name('login.store');
        Route::get('register', 'AdminAuthController@register')->name('register');
        Route::post('register', 'AdminAuthController@registerStore')->name('register.store');
        Route::get('logout', 'AdminAuthController@logout')->name('logout');
    });

    // ============================================
    // BACKEND AUTHENTICATED APIs
    // ============================================
    Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('dashboard', 'AdminAuthController@dashboard')->name('dashboard');

        // User Management
        Route::resource('users', 'UserController');
        Route::put('users/{user}/update-status', 'UserController@updateStatus')->name('users.update-status');
        Route::get('user-access', 'UserController@userAccess')->name('user-access');

        // Role & Permission Management
        Route::resource('roles', 'RoleController');
        Route::resource('permissions', 'PermissionController');

        // Employee Management
        Route::resource('employees', 'EmployeeController');
        Route::get('employees/cal', 'EmployeeController@calEmployee')->name('calEmployee');

        // Doctor Management
        Route::resource('doctors', 'DoctorController');
        Route::get('doctors/cal', 'DoctorController@calDoctor')->name('calDoctor');

        // Patient Management
        Route::resource('patients', 'PatientController');
        Route::put('patients/{patient}/update-status', 'PatientController@updateStatus')->name('patients.update-status');
        Route::get('patients/cal', 'PatientController@calPatient')->name('calPatient');

        // Appointment Management
        Route::resource('appointments', 'AdminAppointmentController');
    });

});
