@extends('layouts.frontend-user')
@section('title')
    Appointment List
@endsection

@section('content')
  
<div class="row gx-0">
    <h3 class="text text-primary text-center mt-5">{{ auth()->user()->name }} Status</h3>
    <div class="d-flex justify-content-center">
    <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                              <th>Serial No</th>
                              {{-- <th>Card No</th> --}}
                              <th>Date</th>
                              <th>Time</th>
                              {{-- <th>Email</th> --}}
                              <th>Doctor Name </th>
                              <th>Prescription No.</th>
                              <th>Status</th>
                              <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($appointments as $appoint)
                        <tr>
                            <td class="text-center">{{ $appoint->id }}</td>
                            {{-- <td class="text-center">{{ $appoint->patient->card->card_no}}</td> --}}
                            <td class="text-center">{{ $appoint->date}}</td>
                            <td class="text-center">{{ Carbon\Carbon::parse($appoint->time)->format('h:i A')}}</td>
                            {{-- <td>{{ $appoint->patient->user->email }}</td> --}}
                            <td class="text-center">{{ $appoint->doctor->name ?? ''}}</td>
                            <td>{{ $appoint->doctor->phone }}</td>
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
                            <td class="text-center">
                                <a href="{{ route('frontEnd.appointments.show', $appoint->id) }}"><i class="far fa-eye"></i></a>
                            </td>
                   
                        </tr>
                        @endforeach  
                    </tbody>
                </table>
                    {{ $appointments->links('components.pagination') }}
            </div>
        </div>
@endsection