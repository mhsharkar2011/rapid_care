@extends('layouts.app')
<x-slot name='title'>Appointments</x-slot>

@section('content')
<style>
th,td{
    text-align: center;
}
</style>
    <div class="mt-5 text-center">
            <a href="{{ route('admin.appointments.create') }}" class="btn btn-primary ml-5">Add New Appointment</a>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div id="result">
                
            </div>
        </div>
    </div>
    
    <h3 class="text text-primary text-center mt-5">List of Appointments</h3>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                          <th>Serial No</th>
                          <th>Photo</th>
                          <th>Patient Name </th>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Appointed Doctor </th>
                          <th>Status</th>
                          <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($appointments as $appoint)
                    <tr>
                        <td class="text-center">{{ $appoint->id }}</td>
                        <td><x-patient-avatar :user="$appoint->patient->avatar" width="48px" heith="48px" class="rounded-circle"/></td>
                        <td class="text-center">{{ $appoint->patient->name}}</td>
                        <td class="text-center">{{ $appoint->date }}</td>
                        <td class="text-center">{{ Carbon\Carbon::parse($appoint->time)->format('h:i A')}}</td>
                        <td>{{ $appoint->patient->phone }}</td>
                        <td>{{ $appoint->patient->user->email }}</td>
                        <td class="text-center">{{ $appoint->doctor->name ?? ''}}</td>
                        <td>
                            <form action="{{ route('frontEnd.appointments.update-status', $appoint->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                    <div>
                                        <select style="display:none" name="status" id="status" class="badge bg-inverse-primary ml-2">
                                            @if ($appoint->status == 'ACTIVE')
                                            <div class=" badge bg-inverse-success ml-2">
                                            <option value="INACTIVE" {{ $appoint->status == 'INACTIVE' ? 'selected' : '' }}></option>
                                            </div>
                                            @else
                                            <option value="ACTIVE" {{ $appoint->status == 'ACTIVE' ? 'selected' : '' }}></option>
                                            @endif
                                        </select>
                                    </div>
                        
                                <button type="submit" class="btn">
                                    @if ($appoint->status != 'ACTIVE')
                                    <span class="text-warning">INACTIVE</span>
                                    @else
                                    <span class="bg-inverse-dark text-success">ACTIVE</span>
                                    @endif
                                </button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('admin.appointments.show', $appoint->id) }}" class="btn btn-success"><i class="far fa-eye"></i></a>
                        </td>
                        <td>
                            <form action="{{ route('admin.appointments.destroy', $appoint->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger btn-block">
                            </form>
                        </td>
               
                    </tr>
                    @endforeach  
                </tbody>
            </table>
                {{ $appointments->links('components.pagination') }}
        </div>
    </div>
@endsection