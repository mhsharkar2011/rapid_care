@extends('layouts.app')

@section('content')
    
<h1 class="mb-3">Access Setting </h1>
<div class="row">
    {{--------------------- Role Section ------------------------}}
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-4">
        <div class="bg-light p-4 rounded">
            <h2>Roles</h2>
            <div class="lead">
                Manage your roles here.
                <a href="{{ route('admin.roles.create') }}" class="btn btn-primary btn-sm float-right">Add role</a>
            </div>
            <div class="mt-2">
                @include('layouts.partials.messages')
            </div>
            <table class="table table-bordered">
                <tr>
                    <th width="1%">No</th>
                    <th>Name</th>
                    <th width="3%" colspan="3">Action</th>
                </tr>
                @foreach ($roles as $key => $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('admin.roles.show', $role->id) }}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.edit', $role->id) }}">Edit</a>
                    </td>
                    <td>
                        {!! Form::open(['method' => 'DELETE','route' => ['admin.roles.destroy', $role->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </table>
            <div class="d-flex">
                {!! $roles->links() !!}
            </div>
        </div>
    </div>

    {{--------------------- Permission Section ------------------}}
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-4">
        <div class="bg-light p-4 rounded">
            <h2>Permissions</h2>
            <div class="lead">
                Manage your permissions here.
                <a href="{{ route('admin.permissions.create') }}" class="btn btn-primary btn-sm float-right">Add permissions</a>
            </div>
            <div class="mt-2">
                @include('layouts.partials.messages')
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" width="15%">Name</th>
                    <th scope="col" colspan="3" width="1%"></th> 
                </tr>
                </thead>
                <tbody>
                    @foreach($permissions as $permission)
                        <tr>
                            <td>{{ $permission->name }}</td>
                            <td><a href="{{ route('admin.permissions.edit', $permission->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                            <td>
                                {!! Form::open(['method' => 'DELETE','route' => ['admin.permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
