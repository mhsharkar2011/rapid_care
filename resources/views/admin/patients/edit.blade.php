@extends('layouts.app')

@section('title')
    Update patient
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <h3 class="text text-center text-primary">Update patient</h3>
            <form action="{{ route('admin.patients.update', $patient->id) }}" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <table class="table table-borderless">
                <tr>
                    <td>patient Name</td>
                    <td><input type="text" name="name" class="form-control" value="{{ $patient->name }}"></td>
                </tr>
                {{-- <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" class="form-control" value="{{ $patient->email }}"></td>
                </tr> --}}
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" class="form-control" value="{{ $patient->phone }}"></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>
                        <input type="date" name="dob" class="form-control" value="{{ $patient->dob }}"> 
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <label><input type="radio" name="gender" value="Male">Male</label>
                        <label><input type="radio" name="gender" value="Female">Female</label>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" class="form-control" value="{{ $patient->address }}"></td>
                </tr>
                <tr>
                    <td>Father Name</td>
                    <td>
                      <input type="text" name="father_name" class="form-control" value="{{ $patient->father_name }}">
                    </td>
                </tr>
                <tr>
                    <td>Father Phone</td>
                    <td><input type="text" name="father_phone" class="form-control" value="{{ $patient->father_phone }}"></td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td>
                        <x-patient-avatar :user="$patient->avatar" width="48px" height="48px" class="rounded-circle"/>
                        <input type="file" name="avatar" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <x-status-select name="status" id="status" class="form-control">
                            <x-status-option value="ACTIVE" text="ACTIVE" :selected="$patient->status == 'ACTIVE'" />
                            <x-status-option value="INACTIVE" text="INACTIVE" :selected="$patient->status == 'INACTIVE'" />
                        </x-status-select>
                    </td>   
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update patient Info" name="updatepatient" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
@endsection