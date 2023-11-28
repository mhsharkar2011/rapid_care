@extends('layouts.app')
@section('title')
    Patient List
@endsection

@section('content')
@php
use Carbon\Carbon;
@endphp 
    <h3 class="text text-primary text-center my-5">All Patients</h3>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-striped table-sm table-hover">
                <thead>
                    <tr>
                          <th>Patient Id </th>
                          <th>Card No </th>
                          <th>Photo</th>
                          <th>Name</th>
                          <th>Gender</th>
                          <th>Date of Birth</th>
                          <th>Age</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Card Type</th>
                          <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($patients as $patient)
                     @foreach ($patient->cards as $card )
                    <tr>
                        <td class="text-center">{{ ++$i }}</td>
                        <td>{{ $card->card_no }}</td>
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
                        <td>{{ $card->category }}</td>   
                        <td><a class="btn btn-info" href="{{ route('admin.patients.show', $patient->id) }}"> <i class="far fa-eye"></i></a></td>
                        <td>
                            
                        </td>
                    </tr>
                    @endforeach
                    @endforeach  
                </tbody>
            </table>
                {{ $patients->links('components.pagination') }}
        </div>
    </div>
@endsection