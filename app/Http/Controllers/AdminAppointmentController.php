<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;

class AdminAppointmentController extends Controller
{
    public function index(Request $request)
    {
        // $pageLimit = $request->per_page;
        $data['title'] = "Appointment Details";
        $data['appointPending'] = Appointment::where('status', 'Inactive')->with('pUser', 'dUser', 'card')->orderByRaw('id DESC')->get();
        $data['appointApproved'] = Appointment::where('status', 'Active')->with('pUser', 'dUser', 'card')->orderByRaw('id DESC')->get();
        return view('admin.appointments.index', $data);
    }

    public function create(User $user)
    {
        $data['users'] = $user->select('*')->get();
        return view('admin.appointments.create', $data);
    }

    public function store(Request $request)
    {
        $appoint = new Appointment();
        $appoint->doctor_id = $request->input('doctor_id');
        $appoint->patient_id = $request->input('patient_id');
        $appoint->date = $request->input('date');
        $appoint->time = $request->input('time');
        $appoint->save();
        return redirect()->route('admin.appointments.index');
    }

    public function show($id)
    {
        $data['appointment'] = Appointment::with('pUser', 'dUser', 'patient', 'card')->find($id);
        return view('admin.appointments.show', $data);
    }

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return redirect()->route('admin.appointments.index');
    }
}
