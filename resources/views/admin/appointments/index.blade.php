@extends('layouts.app')
@section('title')
    Appointment List
@endsection
@section('content')
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
        <div class="table-responsive md-5">
            <table id="dataTable" class="table table-striped table-dark table-sm align-middle text-white"
                style="width: 100%">
                <thead class="text-wrap align-middle  font-bold">
                    <tr>
                        <th>ID</th>
                        <th>Card No</th>
                        <th>Photo</th>
                        <th>Name </th>
                        <th>Phone </th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Doctor </th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                @forelse ($appointments as $key=>$appoint)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $appoint->card->card_no ?? '' }}</td>
                        <td><x-patient-avatar :user="$appoint->pUser->patient->avatar ?? ''" width="48px" heith="48px" class="rounded-circle" /></td>
                        <td>{{ $appoint->pUser->patient->name ?? '' }}</td>
                        <td>{{ $appoint->pUser->patient->phone ?? '' }}</td>
                        <td>{{ $appoint->pUser->email ?? '' }}</td>
                        <td>{{ $appoint->date }}</td>
                        <td>{{ Carbon\Carbon::parse($appoint->time)->format('h:i A') }}</td>

                        <td>{{ $appoint->dUser->doctor->name ?? '' }}</td>

                        <td>
                            <form action="{{ route('frontEnd.appointments.update-status', $appoint->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div>
                                    <select style="display:none" name="status" id="status"
                                        class="badge bg-inverse-primary ml-2">
                                        @if ($appoint->status == 'Active')
                                            <div class=" badge bg-inverse-success ml-2">
                                                <option value="INACTIVE"
                                                    {{ $appoint->status == 'Inactive' ? 'selected' : '' }}>
                                                </option>
                                            </div>
                                        @else
                                            <option value="ACTIVE" {{ $appoint->status == 'Active' ? 'selected' : '' }}>
                                            </option>
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
                        <td>
                            <a class="btn btn-info" href="{{ route('admin.appointments.show', $appoint->id) }}"><i
                                    class="fa-regular fa-address-card"></i></a>
                        </td>
                    @empty
                        <h1>No Records Found</h1>
                    </tr>
                @endforelse

            </table>
            {{ $appointments->links('components.pagination') }}
        </div>
    </div>
@endsection
@once
@push('scripts')
    
@endpush
@endonce