@extends('layouts.app')
@section('title')
    Patient Details
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-dark ">
                        <div class="row">
                            <div class="col-lg-6 font-weight-bolder my-2">
                                <span>Details of - {{ ucwords($patient->name) }}</span>
                            </div>
                            <div class="col-lg-6" style="text-align: right">
                                <x-patient-avatar :user="$patient->avatar" width="40px" heith="40px"></x-patient-avatar>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 text-start p-4">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="d-flex flex-column">
                                            <span><strong>Patient Card No:</strong> {{ $patient->card->card_no }}</span>
                                            <span><strong>Patient Name:</strong> {{ $patient->name }}</span>
                                            <span><strong>Patient Email:</strong> {{ $patient->user->email }}</span>
                                            <span><strong>Date of Birth:</strong> {{ $patient->dob }}</span>
                                            <span><strong>Gender:</strong> {{ $patient->gender }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="d-flex flex-column">
                                            <a href="{{ route('admin.patients.edit', $patient->id) }}"
                                                class="btn btn-primary btn-block my-2">Edit patient</a>

                                            <form action="{{ route('admin.patients.destroy', $patient->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Delete patient"
                                                    class="btn btn-danger btn-block">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Patient Medicine Section --}}
    @php
        use Carbon\Carbon;
    @endphp
    <br />
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-dark ">
                        <h3 class="text text-primary text-center">Prescription</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-bordered table-striped table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>Patient Id </th>
                                            <th>Card No </th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Date of Birth</th>
                                            <th>Age</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($patients as $patient)
                                            @foreach ($patient->cards as $card)
                                                <tr>
                                                    <td class="text-center">{{ $patient->id }}</td>
                                                    <td>{{ $card->card_no }}</td>
                                                    <td><x-patient-avatar :user="$patient->avatar" width="48px" heith="48px"
                                                            class="rounded-circle" /></td>
                                                    <td>{{ $patient->name }}</td>
                                                    <td>{{ $patient->gender }}</td>
                                                    <td>{{ $patient->dob }}</td>
                                                    <td>
                                                        @php
                                                            $dob = Carbon::parse($patient->dob);
                                                            $age = $dob->diffInYears(Carbon::now());
                                                        @endphp
                                                        {{ $age }}
                                                    </td>
                                                    <td>{{ $patient->phone }}</td>
                                                    @if ($patient->email != null)
                                                        <td> No Email Found</td>
                                                    @else
                                                        <td>{{ $patient->user->email }}</td>
                                                    @endif
                                                    @if ($patient->status != null)
                                                        <td>No Data Found</td>
                                                    @else
                                                        <td>{{ $patient->user->status }}</td>
                                                    @endif
                                                    <td><a class="btn btn-info"
                                                            href="{{ route('admin.patients.show', $patient->id) }}"> <i
                                                                class="far fa-eye"></i></a></td>
                                                    <td><a class="btn btn-danger"
                                                            href="{{ route('admin.patients.destroy', $patient->id) }}"><i
                                                                class="far fa-trash-alt"></i></a></td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                {{ $patients->links('components.pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
