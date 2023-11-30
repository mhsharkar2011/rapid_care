@extends('layouts.app')
@section('title')
    Patient List
@endsection

@section('content')
@php
use Carbon\Carbon;
@endphp 
    <h3 class="text text-info text-center my-2">All Patients</h3>
    <div class="row">
        <div class="col-12">
            <table id="dataTable" class="table table-bordered table-striped table-sm table-hover">
                <thead class="text-wrap bg-dark text-white align-middle text-center  font-bold">
                    <tr>
                          <th>ID</th>
                          <th>Photo</th>
                          <th>Card No </th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>DOB</th>
                          <th>Age</th>
                          <th>Father's Name</th>
                          <th>Card Type</th>
                          <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-wrap text-center  ">
                     @foreach ($patients as $patient)
                     @foreach ($patient->cards as $card )
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td><x-patient-avatar :user="$patient->avatar" width="48px" heith="48px" class="rounded-circle"/></td>
                        <td>{{ $card->card_no }}</td>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->phone }}</td>
                        <td>{{ $patient->dob }}</td>
                        {{-- Age Calculation --}}
                        <td>
                           @php
                               $dob = Carbon::parse($patient->dob);
                                $age = $dob->diffInYears(Carbon::now());
                           @endphp
                           {{ $age }}
                        </td>
                        {{-- --------------- --}}
                        <td>{{ $patient->father_name }}</td>
                        <td>{{ $card->category }}</td>   
                        <td><a class="btn btn-info" href="{{ route('admin.patients.show', $patient->id) }}"> <i class="far fa-eye"></i></a></td>
                    </tr>
                    @endforeach
                    @endforeach  
                </tbody>
            </table>
        </div>
    </div>
@endsection