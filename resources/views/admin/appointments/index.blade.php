@extends('layouts.app')
@section('title')
    Appointment List
@endsection
@section('content')
<div class="row">
    <div class="col-6">
        <a href="{{ route('admin.appointments.create') }}" class="btn btn-info">{!! Helper::uppercase('New Appointment') !!}</a>
    </div>
</div>
    <h3 class="text text-info text-center my-2">In Approved</h3>
    <div class="row">
        <div class="table-responsive md-5">
            <table id="dataTable" class="table table-striped  table-hover table-sm align-middle" style="width: 100%">
                <thead class="text-wrap bg-dark text-white align-middle text-center  font-bold">
                    <tr>
                        <th>ID</th>
                        <th>Card No</th>
                        <th>Name </th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Doctor </th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-center text-wrap">
                @forelse ($appointments as $key=>$appoint)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $appoint->card->card_no ?? '' }}</td>
                        <td>{{ $appoint->pUser->name ?? '' }}</td>
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
                                                <option value="INACTIVE" {{ $appoint->status == 'Inactive' ? 'selected' : '' }} ></option>
                                            </div>
                                        @else
                                            <option value="ACTIVE" {{ $appoint->status == 'Active' ? 'selected' : '' }}></option>
                                        @endif
                                    </select>
                                </div>
                                <button type="submit" class="btn">
                                    @if ($appoint->status == 'Active')
                                        <span class=" text-warning">Pending</span>
                                    @else
                                        <span class="bg-inverse-dark text-warning">Approved</span>
                                    @endif
                                </button>
                            </form>
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{ route('admin.appointments.show', $appoint->id) }}"><i class="far fa-eye"></i></a>
                        </td>
                    @empty
                        <h1>No Records Found</h1>
                    </tr>
                @endforelse
            </tbody>
            </table>
        </div>
    </div>
{{-- All Apporoved Appointment --}}
    <h3 class="text text-info text-center my-4">Approved</h3>
    <div class="row">
        <div class="table-responsive md-5">
            <table id="dataTable" class="table table-striped  table-hover table-sm align-middle" style="width: 100%">
                <thead class="text-wrap bg-dark text-white align-middle text-center  font-bold">
                    <tr>
                        <th>ID</th>
                        <th>Card No</th>
                        <th>Name </th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Doctor </th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-center text-wrap">
                @forelse ($appointments as $key=>$appoint)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $appoint->card->card_no ?? '' }}</td>
                        <td>{{ $appoint->pUser->name ?? '' }}</td>
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
                                            <div class=" badge bg-inverse-warning ml-2">
                                                <option value="INACTIVE" {{ $appoint->status == 'Inactive' ? 'selected' : '' }} ></option>
                                            </div>
                                        @else
                                            <option value="ACTIVE" {{ $appoint->status == 'Active' ? 'selected' : '' }}></option>
                                        @endif
                                    </select>
                                </div>
                                <button type="submit" class="btn">
                                    @if ($appoint->status != 'Active')
                                        <span class="text-warning">Pending</span>
                                    @else
                                        <span class="bg-inverse-dark text-success">Approved</span>
                                    @endif
                                </button>
                            </form>
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{ route('admin.appointments.show', $appoint->id) }}"><i class="far fa-eye"></i></a>
                        </td>
                    @empty
                        <h1>No Records Found</h1>
                    </tr>
                @endforelse
            </tbody>
            </table>
        </div>
    </div>
@endsection