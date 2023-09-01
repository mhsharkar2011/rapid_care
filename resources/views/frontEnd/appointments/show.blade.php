@extends('layouts.frontend-user')
@section('title')
    Appointment Details
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Appointment Details</div>

                <div class="card-body">
                    <p><strong>Patient Name:</strong> {{ $appointment->patient->name }}</p>
                    <p><strong>Date:</strong> {{ $appointment->date }}</p>
                    <p><strong>Time:</strong> {{ $appointment->time }}</p>
                    <p><strong>Doctor:</strong> {{ $appointment->doctor->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
