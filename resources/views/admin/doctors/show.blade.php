@extends('layouts.app')
@section('title')
    Doctor Details
@endsection

@section('content')
    <div class="title text-center my-3">
        <h2 class="text-primary">{{ $doctor->doctorName }} Details
        </h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr>
                    <td>Doctor Id</td>
                    <td>{{ $doctor->id }}</td>
                </tr>
                <tr>
                    <td>Doctor Name</td>
                    <td>{{ $doctor->name }}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{ $doctor->phone }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $doctor->user->email }}</td>
                </tr>
                <tr>
                    <td>Doctor Status</td>
                    <td>{{ $doctor->user->status }}</td>
                </tr>
                
            </table>
            <a href="{{ route('admin.doctors.edit', $doctor->id) }}" class="btn btn-primary btn-block my-2">Edit Doctor</a>
            
            <form action="{{ route('admin.doctors.destroy', $doctor->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete Doctor" class="btn btn-danger btn-block">
            </form>
        </div>
        <div class="col-md-6">
                <x-doctor-avatar :user="$doctor->avatar" height="60%" width="60%" class="rounded-circle" />
        </div>
    </div>
@endsection