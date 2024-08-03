<?php
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function()
{

// Frontend Public APIs ===================================================================
Route::get('/', 'frontEndController@index')->name('frontEnd.home');
Route::prefix('frontEnd')->name('frontEnd.')->group(function (){
    Route::get('login','AuthController@login')->name('login');
    Route::post('login','AuthController@store')->name('login.store');
    Route::get('register', 'AuthController@register')->name('register');
    Route::post('register', 'AuthController@registerStore')->name('register.store');
    Route::get('about','frontEndController@about')->name('about');
    Route::get('doctors','frontEndController@doctors')->name('doctors');
    Route::get('services','frontEndController@services')->name('services');
    Route::get('patients','frontEndController@patients')->name('patients');
    Route::get('contact', 'frontEndController@showContact')->name('showContact');
    Route::post('contact', 'frontEndController@storeContact')->name('storeContact');
});

// Authenticated Frontend APIs
Route::group(['middleware'=>['auth']], function() {
    Route::prefix('frontEnd')->name('frontEnd.')->group(function(){
    // patientController
        // Route::resource('patients', PatientController::class);
        // Route::get('patients/cal', [PatientController::class, 'calPatient')->name('calPatient');

        Route::get('appointments', 'AppointmentController@index')->name('appointments.index');
        Route::put('appointments/{appointment}/update-status','AppointmentController@updateStatus')->name('appointments.update-status');
        Route::get('appointments/create', 'AppointmentController@create')->name('appointments.create');
        Route::post('appointments/store', 'AppointmentController@store')->name('appointments.store');
        Route::get('appointments/{id}', 'AppointmentController@show')->name('appointments.show');
        Route::get('logout', 'AuthController@logout')->name('logout');
    });
});

// Backend Public APIs ==================================================================
Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('login','AdminAuthController@login')->name('login');
    Route::post('login','AdminAuthController@store')->name('login.store');
    Route::get('register', 'AdminAuthController@register')->name('register');
    Route::post('register', 'AdminAuthController@store')->name('register.store');
});

Route::group(['middleware' => ['auth']], function() {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::resource('users', 'UserController');
        Route::put('users/{user}/update-status','UserController@updateStatus')->name('users.update-status');
        Route::get('logout', 'AdminAuthController@logout')->name('logout');
        // Route::post('users', 'serController::class,'updateProfile')->name('updateProfile');

        Route::resource('employees', 'EmployeeController');
        Route::get('employees/cal', 'EmployeeController@calEmployee')->name('calEmployee');

        Route::resource('doctors', 'DoctorController');
        Route::get('doctors/cal', 'DoctorController@calDoctor')->name('calDoctor');

        // patientController
        Route::resource('patients', 'PatientController');
        Route::put('patients/{patient}/update-status','PatientController@updateStatus')->name('patients.update-status');
        Route::get('patients/cal', 'PatientController@calPatient')->name('calPatient');

        // AppointmentController::
        Route::resource('appointments', 'AdminAppointmentController');

        Route::get('user-access', 'UserController@userAccess')->name('user-access');
        Route::resource('roles', 'RoleController');
        Route::resource('permissions', 'PermissionController');
    });

});

});
