@extends('layouts.app')
@section('title')
    appointments Details
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-dark">
                        <h1>Appointment Details of - {{ ucwords($appointment->pUser->name ??'') }}</h1>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 text-start p-4">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="d-flex flex-column">
                                         <span><strong>Patient Card No:</strong> {{ $appointment->card->card_no ?? '' }}</span>
                                         <span><strong>Patient Name:</strong> {{ $appointment->pUser->name ?? '' }}</span>
                                         <span><strong>Patient Email:</strong> {{ $appointment->pUser->email ?? '' }}</span>
                                         
                                         {{-- <span><strong>Gender:</strong> {{ $appointment->pUser->patient->gender }}</span> --}}
                                        </div>
                                     </div>
                                     <div class="col-md-3">
                                         <div class="text-center">
                                             <x-patient-avatar :user="$appointment->avatar" width="80px" heith="80px"></x-patient-avatar>
                                         </div>
                                     </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-start p-4">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="d-flex flex-column">
                                            <span><strong>Doctor Name:</strong> {{ $appointment->dUser->doctor->name }}</span>
                                            <span><strong>Doctor Phone:</strong> {{ $appointment->dUser->doctor->phone }}</span>
                                            <span><strong>Doctor Email:</strong> {{ $appointment->dUser->email }}</span>
                                            <span><strong>Specialist:</strong> {{ $appointment->dUser->doctor->specialist }}</span>
                                        </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="d-flex flex-column">
                                                <x-doctor-avatar :user="$appointment->dUser->doctor->avatar" width="80px" heith="80px"></x-doctor-avatar>
                                            </div>
                                        </div>
                                        
                                </div>
                            </div>
                            <div class="col-6">
                                <td><a class="btn btn-info" href="#">Approved</a></td>
                            </div>
                            <div class="col-lg-6">
                                <form action="{{ route('admin.appointments.destroy', $appointment->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
