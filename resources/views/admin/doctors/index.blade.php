@extends('layouts.app')
@section('title')
    Doctor List
@endsection

@section('content')
{{-- <div class="row">
    <div class="col-6">
        <a href="{{ route('admin.doctors.create') }}" class="btn btn-info">{!! Helper::uppercase('Add New Doctor') !!}</a>
    </div>
</div> --}}
    <h3 class="text text-info text-center my-2">All Doctors</h3>
    <div class="row">
        <div class="col-12">
            <table id="dataTable" class="table table-bordered table-striped table-sm table-hover">
                <thead class="text-wrap bg-dark text-white align-middle text-center  font-bold">
                    <tr>
                        <th>ID</th>
                        <th>Photo</th>
                        <th>Name </th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-wrap text-center">
                    @foreach ($doctors as $doctor)
                        <tr>
                            <td>{{ ++$id }}</td>
                            <td><x-doctor-avatar :user="$doctor->avatar" width="48" height="48" class="rounded-circle" /></td>
                            <td>{{ $doctor->name }}</td>
                            <td>{{ $doctor->phone }}</td>
                            <td>{{ $doctor->user->email }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('admin.doctors.show', $doctor->id) }}"><i class="far fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
