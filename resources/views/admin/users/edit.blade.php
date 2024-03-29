@extends('layouts.app')

@section('title')
    Update User
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <h3 class="text text-center text-primary">Update {{ $user->name }}</h3>
            <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
              @method('PUT')
            <table class="table table-borderless">
                <tr>
                    <td>Card Number</td>
                    <td><input type="text" name="card_no" class="form-control" value="{{ $cardNo->card_no }}"></td>
                </tr>
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name="name" class="form-control" value="{{ $user->name }}"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" class="form-control" value="{{ $user->email }}"></td>
                </tr>
                <tr>
                    <td>Roles</td>
                    <td>
                        <x-status-select name="roles" id="roles" class="form-control">
                            <x-status-option value="{{ $user->roles }}" name="{{ $user->roles }} " />
                            <x-status-option value="Admin" name="Admin" />
                            <x-status-option value="Doctor" name="Doctor" />
                            <x-status-option value="Employee" name="Employee" />
                            <x-status-option value="Patient" name="Patient" />
                        </x-status-select>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <x-status-select name="status" id="status" class="form-control">
                            <x-status-option value="Active" name="Active" :selected="$user->status == 'Active'" />
                            <x-status-option value="Inactive" name="Inactive" :selected="$user->status == 'Inactive'" />
                        </x-status-select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update user" name="updateuser" class="btn btn-primary btn-block mt-2"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
@endsection