@extends('layouts.app')
@section('title')
    User Details
@endsection

@section('content')
    <div class="title text-center my-3">
        <h2 class="text-primary">{{ $user->name }} Details
        </h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr>
                    <td>User Id</td>
                    <td>{{ $user->id }}</td>
                </tr>
                <tr>
                    <td>User Name</td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{ $user->phone }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>{{ $user->status }}</td>
                </tr>
                
            </table>
            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary btn-block my-2">Edit user</a>
            
            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete user" class="btn btn-danger btn-block">
            </form>
        </div>
    </div>
@endsection