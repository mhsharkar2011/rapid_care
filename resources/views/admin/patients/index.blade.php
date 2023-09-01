@extends('layouts.app')
@section('title')
    Patient List
@endsection

@section('content')
@php
use Carbon\Carbon;
@endphp
<style>
th,td{
    text-align: center;
}
</style>
    <div class="mt-5 text-center">
        <p><button class="btn btn-primary mr-5" id="patientCalBtn">Patient Statistics</button>
            {{-- <a href="{{ route('admin.patients.create') }}" class="btn btn-primary ml-5">Add New Patient</a> --}}
        </p>
        
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div id="result">
                
            </div>
        </div>
    </div>
    
    <h3 class="text text-primary text-center my-5">All Patients</h3>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                          <th>Patient Id </th>
                          <th>Card Number </th>
                          <th>Photo</th>
                          <th>Name</th>
                          <th>Gender</th>
                          <th>Date of Birth</th>
                          <th>Age</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                     @foreach ($patients as $patient)
                    <tr>
                        <td class="text-center">{{ $patient->id }}</td>
                        <td>{{ $patient->card->card_no }}</td>
                        <td><x-patient-avatar :user="$patient->avatar" width="48px" heith="48px" class="rounded-circle"/></td>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->gender }}</td>
                        <td>{{ $patient->dob }}</td>
                        <td>
                           @php
                               $dob = Carbon::parse($patient->dob);
                                $age = $dob->diffInYears(Carbon::now());
                           @endphp
                           {{ $age }}
                        </td>
                        <td>{{ $patient->phone }}</td>
                        <td>{{ $patient->user->email }}</td>
                        <td>{{ $patient->user->status }}</td>
                        <td><a href="{{ route('admin.patients.show', $patient->id) }}"> <i class="fas fa-eye text-info"></i></a></td>
                        <td><a href="{{ route('admin.patients.destroy', $patient->id) }}"><i class="fas fa-times-circle text-danger"></i></a></td>
                    </tr>
                    @endforeach  
                </tbody>
            </table>
            
            {{-- <x-pagination links="{{ $patients->links() }}" class="bg-blue-500 text-dark p-4" /> --}}

                {{ $patients->links('components.pagination') }}

        </div>
    </div>
@endsection