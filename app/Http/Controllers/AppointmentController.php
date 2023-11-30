<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Card;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        $pageLimit = $request->per_page ?? 5;
        $user_id = auth()->user()->id;
        $data['title'] = "Appointment Details";
        $data['card'] = Card::first();
        $data['appointments'] = Appointment::where('patient_id',$user_id)->latest()->paginate($pageLimit);
        return view('frontEnd.appointments.index',$data)->with('id',(request()->input('page', 1) - 1) * $pageLimit);
    }

    public function create(Doctor $doctor)
    {
        $data['doctors'] = User::where('roles','Doctor')->get();
        $data['user'] = auth()->user()->id;

        return view('frontEnd.appointments.create', $data)->with('success','Your Appointment has been created successfully');
    }

    public function store(Request $request)
    {
        $appoint = new Appointment();
        $appoint->doctor_id = $request->input('doctor_id');
        $appoint->patient_id = $request->user()->id;
        $appoint->date = $request->input('date');
        $appoint->time = $request->input('time');
        $appoint->save();

        return redirect()->back()->with('status', 'Appointments created successfully');
    }


    public function show($id)
    {
        $data['appointment'] = Appointment::with('user')->find($id);
        return view('frontEnd.appointments.show', $data);
    }

    public function edit(Appointment $appointment)
    {
        //
    }

    public function update(Request $request, Appointment $appointment)
    {
        $input = $request->all();
        $appointment->update($input);

        return redirect()->route('appointment.index')->with('status', 'success');
    }

    public function destroy(Appointment $appointment)
    {
        //
    }

    public function updateStatus(Request $request, Appointment $appointment)
    {
        $status = $request->status;
        if ($status == 'ACTIVE' || $status == 'INACTIVE') {
            $appointment->status = $status;
            $appointment->save();
            return redirect()->back()->with('status', 'Status has been updated.');
        } else {
            return redirect()->with('error', 'Invalid Status');
        }
    }
}
