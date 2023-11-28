@extends('layouts.app')
@section('title')
    Patient Details
@endsection
@once
@push('css')
    <link href="{{ asset('css/dataTables.bootstrap5.min.css') }}" />
@endpush
@endOnce
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-dark ">
                        <div class="row">
                            <div class="col-lg-6 font-weight-bolder my-2">
                                <span>Details of - {{ ucwords($patient->name) }}</span>
                            </div>
                            <div class="col-lg-6" style="text-align: right">
                                <x-patient-avatar :user="$patient->avatar" width="40px" heith="40px"></x-patient-avatar>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 text-start p-4">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="d-flex flex-column">
                                            <span><strong>Patient Card No:</strong> {{ $patient->card->card_no }}</span>
                                            <span><strong>Patient Name:</strong> {{ $patient->name }}</span>
                                            <span><strong>Patient Email:</strong> {{ $patient->user->email }}</span>
                                            <span><strong>Date of Birth:</strong> {{ $patient->dob }}</span>
                                            <span><strong>Gender:</strong> {{ $patient->gender }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="d-flex flex-column">
                                            <a href="{{ route('admin.patients.edit', $patient->id) }}"
                                                class="btn btn-primary btn-block my-2">Edit patient</a>

                                            <form action="{{ route('admin.patients.destroy', $patient->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Delete patient"
                                                    class="btn btn-danger btn-block">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Patient Medicine Section --}}
    @php
        use Carbon\Carbon;
    @endphp
    <br />
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-dark ">
                        <h3 class="text text-primary text-center">All Appointments</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-striped table-dark table-sm align-middle text-white datatable">
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
                                            <th>Status</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                       </tr>
                                       <tr>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                       </tr>
                                       <tr>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                       </tr>
                                       <tr>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                       </tr>
                                       <tr>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                       </tr>
                                       <tr>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                       </tr>
                                       <tr>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                       </tr>
                                       <tr>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                       </tr>
                                       <tr>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                       </tr>
                                       <tr>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                       </tr>
                                       <tr>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                        <td>H1</td>
                                       </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
