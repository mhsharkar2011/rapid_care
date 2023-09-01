@extends('layouts.app')
@section('title')
    Employee Details
@endsection

@section('content')
    <div class="title text-center my-3">
        <h2 class="text-primary">{{ $employee->name }} Details
        </h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr>
                    <td>employee Id</td>
                    <td>{{ $employee->id }}</td>
                </tr>
                <tr>
                    <td>employee Name</td>
                    <td>{{ $employee->name }}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{ $employee->phone }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $employee->user->email }}</td>
                </tr>
                <tr>
                    <td>Employee Status</td>
                    <td>{{ $employee->user->status }}</td>
                </tr>
                
            </table>
            <a href="{{ route('admin.employees.edit', $employee->id) }}" class="btn btn-primary btn-block my-2">Edit employee</a>
            
            <form action="{{ route('admin.employees.destroy', $employee->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete employee" class="btn btn-danger btn-block">
            </form>
        </div>
        <div class="col-md-6">
                <x-employee-avatar :user="$employee->avatar" height="60%" width="60%" class="rounded-circle" />
        </div>
    </div>
@endsection