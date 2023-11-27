<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index(Request  $request)
    {
        $pageLimit = $request->per_page ?? 5;
        $data['employees'] = Employee::with('user')->whereHas('user',function($q){
            $q->where('roles','Employee');
            $q->where('status','ACTIVE');
        })->latest()->paginate($pageLimit);
        return view('admin.employees.index',$data)->with('id',(request()->input('page', 1) - 1) * $pageLimit);
    }

    public function create()
    {
        return view('admin.employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);

        $employeeObj = new Employee();

        if($request->hasFile('avatar')){
            $image = $request->file('avatar');
            $name = time().'.'.$image->getClientOriginalExtension();
            $path = public_path('/upload/employees');
            $image->move($path, $name);
            $employeeObj->avatar = $name;
        }
        $employeeObj->name = $request->name;
        $employeeObj->phone = $request->phone;
        $employeeObj->specialization = $request->specialization;
        $employeeObj->dob = $request->password;
        $employeeObj->status = $request->status;
        $employeeObj->save();

        return redirect()->route('admin.employees.index')->with('success', 'employee Added Successfully');
    }

    public function show(Employee $employee)
    {
        return view('admin.employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('admin.employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $input = $request->except('avatar');

        if ($employee->avatar && $request->hasFile('avatar')) {
            Storage::delete('public/employees/avatars/' . $employee->avatar);
            $employee->avatar = null;
        }
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = $employee->id . '-' . $employee->name . '-' . date('Ymd') . '.' . $avatar->getClientOriginalExtension();
            $avatar->storeAs('public/employees/avatars', $filename);
            $employee->avatar = $filename;
            $employee->save();
        }
        $employee->update($input);

        return redirect()->route('admin.employees.index')->with('success', 'employee Updated Successfully');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('admin.employees.index');
    }

    public function calEmployee(){
        $data = [];
        $data['pubEmployee'] = Employee::where('status', 'Publish')->count();
        $data['unPubEmployee'] = Employee::where('status', 'UnPublish')->count();
        $data['totalEmployees'] = Employee::where('role_id','1')->count();

        return view('admin.employees.calEmployee', $data);
    }
}

