<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
class PatientCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Patient::latest()->paginate(4);
    
        return view('patients.index',compact('records'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'patientDetails' => 'required|min:10|max:4096',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $imageDestinationPath = 'uploads/patients/';
            $patientImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $patientImage);
            $input['image'] = "$patientImage";
        }
    
        Patient::create($input);
     
        return redirect()->route('patients.index')->with('success','Patients created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('patients.show',compact('patient'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patients.edit',compact('patient'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'patientDetails' => 'required|min:10|max:4096'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $imageDestinationPath = 'uploads/patients/';
            $patientImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $patientImage);
            $input['image'] = "$patientImage";
        }else{
            unset($input['image']);
        }
          
        $patient->update($input);
    
        return redirect()->route('patients.index')->with('success','Patient updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')
        ->with('success','Patients deleted successfully');
    }
}
