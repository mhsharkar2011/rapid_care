<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostCtrl;
use App\Http\Controllers\PatientCtrl;

Route::get('/', function () {
    return redirect('/patients');
});
Route::resource('posts', PostCtrl::class);
Route::resource('patients', PatientCtrl::class);