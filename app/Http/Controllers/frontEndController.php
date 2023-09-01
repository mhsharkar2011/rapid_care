<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Doctor;
use App\Models\Noticeboard;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class frontEndController extends Controller
{
    public function index(){
        $data['doctors'] = Doctor::all()->take(2);
        return view('frontEnd.home',$data);
    }
    public function doctors(){
        $data['doctors'] = Doctor::all()->take(2);
        return view('frontEnd.doctors',$data);
    }

    public function showContact(){
        return view('frontEnd.contact');
    }
    public function storeContact(){
        
        return view('frontEnd.contact');
    }

    public function about(){
        return view('frontEnd.about');
    }
}
