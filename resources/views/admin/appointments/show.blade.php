@extends('layouts.app')
@section('title')
    appointments Details
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-dark"><h1>Appointment Details of - {{ ucwords($appointment->patient->name) }}</h1></div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8 text-start">
                            <div class="d-flex flex-column">
                                <p><strong>Patient Name:</strong> {{ $appointment->card->card_no }}</p>
                                <p><strong>Patient Name:</strong> {{ $appointment->patient->name }}</p>
                                <p><strong>Date:</strong> {{ $appointment->date }}</p>
                                <p><strong>Time:</strong> {{ $appointment->time }}</p>
                                <p><strong>Doctor:</strong> {{ $appointment->doctor->name }}</p>
                            </div>
                            
                        </div>
                        <div class="col-lg-4 text-start">
                            <div class="d-flex flex-column">
                            <x-patient-avatar :user="$appointment->patient->avatar" width="148px" heith="148px"></x-patient-avatar>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection