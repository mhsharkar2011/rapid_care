@extends('layouts.app')

@section('title')
    Add Teacher
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <h3 class="text text-center text-primary">Add New Doctor</h3>
            <form action="{{ route('admin.doctors.store') }}" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
            <table class="table table-borderless">
                <tr>
                    <td>Doctor Name</td>
                    <td><input type="text" name="name" class="form-control"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" class="form-control"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" class="form-control" value="123456"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Add Doctor" name="saveDoctor" class="btn btn-info"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
@endsection