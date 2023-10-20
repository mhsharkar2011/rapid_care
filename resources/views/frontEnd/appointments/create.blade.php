@extends('layouts.master')

@section('title', 'Rapid Care|Appointment')

@section('content')
<!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary h-100 d-flex flex-column text-center p-5">
                        <h1 class="text-white mb-4">Opening Hours</h1>
                        <div class="d-flex justify-content-between text-white font mb-3">
                            <h3 class="text-white mb-0">Mon - Fri</h3>
                            <h3 class="text-white mb-0"> 8:00am - 9:00pm</h3>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h3 class="text-white mb-0">Saturday</h3>
                            <h3 class="text-white mb-0"> 8:00am - 7:00pm</h3>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h3 class="text-white mb-0">Sunday</h3>
                            <h3 class="text-white mb-0"> 8:00am - 5:00pm</h3>
                        </div>
                       <div class="text-center">
                        <a href="{{ route('frontEnd.login') }}" > <x-button class="btn btn-dark">Appointment</x-button></a>
                       </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Make Appointment</h1>
                        <form action="{{ route('frontEnd.appointments.store') }}" method="POST">
                            @csrf
                        <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select name="doctor_id" class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select Doctor</option>
                                        @foreach ($doctors as $doctor)
                                        @if ($doctor->id == auth()->user()->id)
                                        <option value="{{ $doctor->id}}">{{ $doctor->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="patient_id" class="form-control bg-light border-0" placeholder="{{ auth()->user()->name}}" style="height: 55px;" value="">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <label for="date">Date</label>
                                        <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time1" data-target-input="nearest">
                                        <label for="time">Time</label>
                                        <input type="time" name="time" id="time" class="form-control" value="{{ old('time') }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Make Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
@endsection