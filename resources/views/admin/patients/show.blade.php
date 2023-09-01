@extends('layouts.app')
@section('title')
    patient Details
@endsection

@section('content')
    <div class="title text-center my-3">
        <h2 class="text-primary">{{ $patient->Name }} Details</h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr>
                    <td class="w-25">Patient Id</td>
                    <td>{{ $patient->id }}</td>
                </tr>
                <tr>
                    <td>patient Name</td>
                    <td>{{ $patient->name }}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{ $patient->phone }}</td>
                </tr>
                <tr>
                    <td>Birth</td>
                    <td>
                        @php
                            $dob = Carbon\Carbon::parse($patient->dob);
                            $age = $dob->diffInYears(Carbon\Carbon::now());
                        @endphp
                        {{ $age }}
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>{{ $patient->gender }}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>{{ $patient->address }}</td>
                </tr>
                <tr>
                    <td>Father Name</td>
                    <td>{{ $patient->father_name }}</td>
                </tr>
                <tr>
                    <td>Father Phone</td>
                    <td>{{ $patient->father_phone }}</td>
                </tr>
                
                <tr>
                    <td>patient Status</td>
                    <td>{{ $patient->status }}</td>
                </tr>
                
            </table>
            <a href="{{ route('admin.patients.edit', $patient->id) }}" class="btn btn-primary btn-block my-2">Edit patient</a>
            
            <form action="{{ route('admin.patients.destroy', $patient->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete patient" class="btn btn-danger btn-block">
            </form>
        </div>
        <div class="col-md-6">
            <x-patient-avatar :user="$patient->avatar" width="60%" class="rounded-circle" />
        </div>
    </div>
@endsection