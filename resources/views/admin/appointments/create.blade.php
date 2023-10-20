@extends('layouts.app')

@section('title')
    Appointment for patient
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
    <div class="row mt-5">
        <div class="col-md-5 offset-md-3">
            <h3 class="text text-center text-primary">New Appointment</h3>
            <form action="{{ route('admin.appointments.store') }}" method="POST" class="form-group">
                @csrf
                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <select name="doctor_id" class="form-select bg-light border-0" style="height: 55px;">
                            <option selected>Select Doctor</option>
                            @foreach ($doctors as $doctor)
                            <option value="{{ $doctor->id}}">{{ $doctor->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-sm-6">
                        <select name="patient_id" class="form-select bg-light border-0" style="height: 55px;">
                            <option selected>Select Patient</option>
                            @foreach ($patients as $patient)
                                @foreach ($patient->cards as $card )
                                    <option value="{{ $patient->id}}">{{ $patient->name}}</option>
                                @endforeach
                            @endforeach
                        </select>
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
    
@endsection
    