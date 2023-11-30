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
                                <td>
                                    <form action="{{ route('frontEnd.appointments.update-status', $appoint->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div>
                                            <select style="display:none" name="status" id="status"
                                                class="badge bg-inverse-primary ml-2">
                                                @if ($appoint->status == 'Active')
                                                    <div class=" badge bg-inverse-success ml-2">
                                                        <option value="INACTIVE" {{ $appoint->status == 'Inactive' ? 'selected' : '' }} ></option>
                                                    </div>
                                                @else
                                                    <option value="ACTIVE" {{ $appoint->status == 'Active' ? 'selected' : '' }}></option>
                                                @endif
                                            </select>
                                        </div>
                                        <button type="submit" class="btn">
                                            @if ($appoint->status == 'Active')
                                                <span class="text-success">Pending</span>
                                            @else
                                                <span class="bg-inverse-dark text-warning">Approved</span>
                                            @endif
                                        </button>
                                    </form>
                                </td>
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