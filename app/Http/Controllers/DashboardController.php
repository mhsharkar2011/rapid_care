<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Employee;
use App\Models\Patient;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['user'] = auth()->user()->id;
        $data['totalEmployees'] = Employee::count();
        $data['totalDoctors'] = Doctor::count();
        $data['totalPatients'] = Patient::count();
        $data['totalAppointments'] = Appointment::count();
        $data['totalAppointPending'] = Appointment::where('status','Inactive')->count();
        $data['totalAppointApproved'] = Appointment::where('status','Active')->count();
        $data['totalTransaction'] = Transaction::count();
        return view('admin.dashboard', $data);
    }
}
