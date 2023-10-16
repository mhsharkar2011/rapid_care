<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pageLimit = $request->per_page ?? 5;
        $user_id = auth()->user()->id;
        $data['title'] = "Appointment Details";
        $data['appointments'] = Appointment::where('user_id',$user_id)->with('user','card')->latest()->paginate($pageLimit);
        $data['appointmentsInActives'] = Appointment::where('status','INACTIVE')->with('patient','doctor')->latest()->paginate($pageLimit);
        return view('frontEnd.appointments.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Doctor $doctor)
    {
        $data['doctors'] = $doctor->select('id','name')->get();
        $data['patient'] = auth()->user()->id;
        return view('frontEnd.appointments.create',$data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appoint = new Appointment();
        $appoint->doctor_id = $request->input('doctor_id');
        $appoint->patient_id = $request->user()->id;
        $appoint->date = $request->input('date');
        $appoint->time = $request->input('time');
        $appoint->save();

        return redirect()->back()->with('status','Appointments created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['appointment'] = Appointment::with('patient','doctor')->find($id);
        return view('frontEnd.appointments.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        $input = $request->all();
        $appointment->update($input);

        return redirect()->route('appointment.index')->with('status', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }

    public function updateStatus(Request $request, Appointment $appointment)
    {
            $status = $request->status;
            if($status == 'ACTIVE' || $status == 'INACTIVE'){
            $appointment->status = $status;
            $appointment->save();
                return redirect()->back()->with('status', 'Status has been updated.');
            }else{
                return redirect()->with('error','Invalid Status');
        }
    }

}
