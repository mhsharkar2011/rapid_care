@extends('layouts.master')
@section('title')
    Appointment List
@endsection
@section('content')
<h3 class="text text-primary text-center mt-5"> {{ auth()->user()->name }} Appointments Status</h3>
<div class="row justify-content-center">
        <div class=" card col-lg-9">
            <div class="card-body">
        <div class="table-responsive">
            <table id="dataTable" class="table table-dark  table-hover table-sm align-middle" style="width: 100%">
                <thead class="text-wrap bg-dark text-center  ">
                            <tr>
                                  <th>Serial No</th>
                                  <th>Date</th>
                                  <th>Time</th>
                                  <th>Doctor Name </th>
                                  <th>Status</th>
                                  <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($appointments as $appoint)
                            <tr>
                                <td class="text-center">{{ ++$id }}</td>
                                <td class="text-center">{{ $appoint->date}}</td>
                                <td class="text-center">{{ Carbon\Carbon::parse($appoint->time)->format('h:i A')}}</td>
                                <td class="text-center">{{ $appoint->dUser->name ?? ''}}</td>
                                @if ($appoint->status == "Active")
                                <td class="text-center text-success">{{ $appoint->status ? 'Approved':''}}</td>
                                @elseif ($appoint->status == "Inactive")
                                <td class="text-center text-warning">{{ $appoint->status ? 'Pending':''}}</td>
                                @endif
                                <td class="text-center">
                                    <a href="{{ route('frontEnd.appointments.show', $appoint->id) }}"><i class="far fa-eye"></i></a>
                                </td>
                       
                            </tr>
                            @endforeach  
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
    </div>
</div>
@endsection