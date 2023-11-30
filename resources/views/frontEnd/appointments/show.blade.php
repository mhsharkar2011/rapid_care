@extends('layouts.master')
@section('title')
    Appointment Details
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
<div class="card text-center">
    <div class="card-header">
        <h3>Appointment Details</h3>
    </div>
    <div class="card-body">
      <h5 class="card-title"> </h5>
      <p>
        <p><strong>Appointment Date:</strong> {{ $appointment->date }}</p>
        <p><strong>Appointment Time:</strong> {{ $appointment->time }}</p>
        <p><strong>Appointed Doctor:</strong> {{ $appointment->dUser->name }}</p>
    </p>
      <a href="#" class="btn btn-primary">Show Prescriptions</a>
    </div>
    <div class="card-footer text-muted">
     <strong>Last Visited Doctor: </strong>
        @php
        use Carbon\Carbon;
            $firstVisited = Carbon::parse($appointment->date);
            $visited = $firstVisited->diffInDays(Carbon::now());
        @endphp
        <strong class="text-info" style="font-size: 22px" > &nbsp;{{ $visited }}</strong> <strong>Days Ago</strong>
    </div>
  </div>
    </div>
</div>
@endsection
