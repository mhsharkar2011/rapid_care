<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Card;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class AdminAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pageLimit = $request->per_page ?? 10;
        $data['title'] = "Appointment Details";
        // $user_id = auth()->user()->id;
        $data['appointments'] = Appointment::where('status','active')->with('employee','doctor','patient')->orderByRaw('id DESC')->paginate($pageLimit);
        $data['appointmentsInActives'] = Appointment::where('status','INACTIVE')->with('employee','patient','doctor')->latest()->paginate($pageLimit);
        return view('admin.appointments.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Doctor $doctor,  Patient $patient)
    {
        $data['doctors'] = $doctor->select('id','name')->get();
        $data['patients'] = $patient->select('id','name')->get();
        return view('admin.appointments.create',$data);
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
        $appoint->patient_id = $request->input('patient_id');
        $appoint->date = $request->input('date');
        $appoint->time = $request->input('time');
        $appoint->save();

        return redirect()->route('admin.appointments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data['appoint'] =$appoint->with('patient','doctor')->get();
        // $data['appointments'] = $appoint->with('patient','doctor')->get();
        $data['appointment'] = Appointment::with('patient','doctor')->find($id);
        return view('admin.appointments.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return redirect()->route('admin.appointments.index');
    }
}
