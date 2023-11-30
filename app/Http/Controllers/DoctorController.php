<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    
    public function index(Request  $request)
    {
        $pageLimit = $request->per_page ?? 5;
        $data['doctors'] = Doctor::with('user')->whereHas('user',function($q){
            $q->where('roles','Doctor');
            $q->where('status','ACTIVE');
        })->latest()->paginate($pageLimit);
        return view('admin.doctors.index',$data)->with('id',(request()->input('page', 1) - 1) * $pageLimit);
    }

    // public function create()
    // {
    //     return view('admin.doctors.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'phone' => 'required',
    //     ]);

    //     $doctorObj = new Doctor();

    //     if($request->hasFile('avatar')){
    //         $image = $request->file('avatar');
    //         $name = time().'.'.$image->getClientOriginalExtension();
    //         $path = public_path('/upload/doctors');
    //         $image->move($path, $name);
    //         $doctorObj->avatar = $name;
    //     }
    //     $doctorObj->name = $request->name;
    //     $doctorObj->phone = $request->phone;
    //     $doctorObj->save();

    //     return redirect()->route('admin.doctors.index')->with('success', 'Doctor Added Successfully');
    // }

    public function show(Doctor $doctor)
    {
        return view('admin.doctors.show', compact('doctor'));
    }

    public function edit(Doctor $doctor)
    {
        return view('admin.doctors.edit', compact('doctor'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $input = $request->except('avatar');

        if ($doctor->avatar && $request->hasFile('avatar')) {
            Storage::delete('public/doctors/avatars/' . $doctor->avatar);
            $doctor->avatar = null;
        }
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = $doctor->id . '-' . $doctor->name . '-' . date('Ymd') . '.' . $avatar->getClientOriginalExtension();
            $avatar->storeAs('public/doctors/avatars', $filename);
            $doctor->avatar = $filename;
            $doctor->save();
        }
        $doctor->update($input);

        return redirect()->route('admin.doctors.index')->with('success', 'Doctor Updated Successfully');
    }

    public function destroy(Doctor $doctor)
    {
        $avatarPath = 'public/doctors/avatars/'.$doctor->avatar;
        if (Storage::exists($avatarPath)) {
            Storage::delete($avatarPath); // Use Storage::delete for better file management
        }
        $doctor->delete();
        return redirect()->route('admin.doctors.index')->with('success', 'Doctor Deleted Successfully');
    }
}
