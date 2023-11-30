@extends('layouts.app')
@section('title')
    User List
@endsection
@section('content')
    <div class="row">
        <div class="col-6">
            <a href="{{ route('admin.users.create') }}" class="btn btn-info">{!! Helper::uppercase('Add New User') !!}</a>
        </div>
    </div>

    <h3 class="text text-info text-center">List of User</h3>
    <div class="row">
        <div class="col-12">
            <table id="dataTable" class="table table-bordered table-striped table-sm table-hover">
                <thead class="text-wrap bg-dark text-white align-middle  font-bold">
                    <tr>
                        <th>User Id </th>
                        <th>Card No </th>
                        <th>Name </th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)    
                        <tr>
                            <td>{{ ++$i }}</td>
                            @if ($user->card)
                                <td>{{ $user->card->card_no }}</td>
                            @else
                                <td class="text-secondary">{{ 'No Card No Found' }}</td>
                            @endif
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            @if ($user->roles == 'Patient')
                                <td class="text-success">{{ 'PATIENT' }}</td>
                            @elseif ($user->roles == 'Doctor')
                                <td class="text-primary">{{ 'DOCTOR' }}</td>
                            @elseif ($user->roles == 'Employee')
                                <td class="text-danger">{{ 'EMPLOYEE' }}</td>
                            @else
                                <td class="text-secondary">{{ 'Roles Not Assign' }}</td>
                            @endif
                            <td>
                                <form action="{{ route('admin.users.update-status', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div>
                                        <select style="display:none" name="status" id="status"
                                            class="badge bg-inverse-primary ml-2">
                                            @if ($user->status == 'active')
                                                <div class=" badge bg-inverse-success ml-2">
                                                    <option value="inactive"
                                                        {{ $user->status == 'inactive' ? 'selected' : '' }}></option>
                                                </div>
                                            @else
                                                <option value="active" {{ $user->status == 'active' ? 'selected' : '' }}>
                                                </option>
                                            @endif
                                        </select>
                                    </div>
                                    <button type="submit" class="btn">
                                        @if ($user->status != 'Active')
                                            <span class="text-warning">INACTIVE</span>
                                        @else
                                            <span class="bg-inverse-dark text-success">ACTIVE</span>
                                        @endif
                                    </button>
                                </form>
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{ route('admin.users.show', $user->id) }}"> <i class="far fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
