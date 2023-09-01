@extends('layouts.app')

@section('title')
    Admission Student
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
    <div class="row mt-5">
        <div class="col-md-5 offset-md-3">
            <h3 class="text text-center text-primary">Add New Patient</h3>
            <form action="{{ route('admin.patients.store') }}" method="POST" class="form-group">
                @csrf
            <table class="table table-borderless">
                <tr>
                    <td>Patient Name</td>
                    <td><input type="text" name="name" class="form-control" value="{{ old('name') }}"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" class="form-control" value="{{ old('phone') }}"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" class="form-control" value="{{ old('email') }}"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" class="form-control" value="{{ old('password') }}"></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>
                        <input type="date" name="dob" class="form-control" value="{{ old('dob') }}"> 
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <label><input type="radio" name="Gender" value="Male">Male</label>
                        <label><input type="radio" name="Gender" value="Female">Female</label>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" class="form-control" value="{{ old('address') }}"></td>
                </tr>
                <tr>
                    <td>Father Name</td>
                    <td>
                      <input type="text" name="father_name" class="form-control" value="{{ old('father_name') }}">
                    </td>
                </tr>
                <tr>
                    <td>Father Phone</td>
                    <td><input type="text" name="father_phone" class="form-control" value="{{ old('father_phone') }}"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="patient_status" id="" class="form-control">
                            <option value="ACTIVE">ACTIVE</option>
                            <option value="INACTIVE">INACTIVE</option>
                        </select>
                    </td>   
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Admit Patient" name="savePatient" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
    
@endsection