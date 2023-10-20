<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pageLimit = $request->per_page ?? 15;
        $data['patients'] = Patient::with('user', 'cards')->whereHas('user', function ($q) {
            $q->where('roles', 'Patient');
            $q->where('status', 'ACTIVE');
        })->latest()->paginate($pageLimit);
            return view('admin.patients.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new Patient();
        $patient->name = $request->input('name');
        $patient->gender = $request->input('gender');
        $patient->dob = $request->input('dob');
        $patient->address = $request->input('address');
        $patient->user_id = auth()->user()->id;
        $patient->card_id = auth()->user()->id;
        $patient->save();

        return redirect()->route('admin.patients.index')->with('success', 'Patient Added Successfully');
    }

    public function show(Patient $patient)
    {
        return view('admin.patients.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        return view('admin.patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $input = $request->except('avatar');
        if ($patient->avatar && $request->hasFile('avatar')) {
            Storage::delete('public/patients/avatars/' . $patient->avatar);
            $patient->avatar = null;
        }

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = $patient->id . '-' . $patient->name . '-' . date('Ymd') . '.' . $avatar->getClientOriginalExtension();
            $avatar->storeAs('public/patients/avatars', $filename);
            $patient->avatar = $filename;
            $patient->save();
        }
        $patient->update($input);

        return redirect()->route('admin.patients.index')->with('success', 'Patient Updated Successfully');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return view('admin.patient.index');
    }

    public function calPatient()
    {
        $data['patients'] = Patient::all();
        $data['totalPatients'] = Patient::all()->count();
        return view('admin.patients.calPatient', $data);
    }

    public function updateStatus(Request $request, Patient $patient)
    {
        $status = $request->status;
        if ($status == 'ACTIVE' || $status == 'INACTIVE') {
            $patient->status = $status;
            $patient->save();
            return redirect()->back()->with('status', 'Status has been updated.');
        } else {
            return redirect()->with('error', 'Invalid Status');
        }
    }
}
