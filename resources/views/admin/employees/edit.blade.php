@extends('layouts.app')

@section('title')
    Update Employee
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <h3 class="text text-center text-primary">Update Employee</h3>
            <form action="{{ route('admin.employees.update', $employee->id) }}" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
              @method('PUT')
            <table class="table table-borderless">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" class="form-control" value="{{ $employee->name }}"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" class="form-control" value="{{ $employee->phone }}"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" class="form-control" value="{{ $employee->user->email }}"></td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td>
                        <x-employee-avatar :user="$employee->avatar" width="48px" height="48px" class="rounded-circle"/>
                        <input type="file" name="avatar" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <x-status-select name="status" id="status" class="form-control">
                            <x-status-option value="ACTIVE" text="ACTIVE" :selected="$employee->status == 'ACTIVE'" />
                            <x-status-option value="INACTIVE" text="INACTIVE" :selected="$employee->status == 'INACTIVE'" />
                        </x-status-select>
                        
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update employee" name="updateemployee" class="btn btn-primary btn-block mt-2"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
@endsection