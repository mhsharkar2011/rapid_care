@extends('layouts.app')

@section('title')
    Add Employee
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <h3 class="text text-center text-primary">Add New Employee</h3>
            <form action="{{ route('admin.employees.store') }}" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
            <table class="table table-borderless">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" class="form-control"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" class="form-control"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" class="form-control"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" class="form-control"></td>
                </tr>

                <tr>
                    <td>Photo</td>
                    <td><input type="file" name="avatar" class="form-control"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <x-status-select name="status" id="status" class="form-control">
                            <x-status-option value="ACTIVE" name="ACTIVE" :selected="$employee->status == 'ACTIVE'" />
                            <x-status-option value="INACTIVE" name="INACTIVE" :selected="$employee->status == 'INACTIVE'" />
                        </x-status-select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Add employee" name="saveemployee" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
@endsection