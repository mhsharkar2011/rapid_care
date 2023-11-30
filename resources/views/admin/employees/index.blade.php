@extends('layouts.app')
@section('title')
    Employee List
@endsection

@section('content')
    <h3 class="text text-info text-center my-2">All Employees</h3>
    <div class="row">
        <div class="col-12">
            <table id="dataTable" class="table table-bordered table-striped table-sm table-hover">
                <thead class="text-wrap bg-dark text-white align-middle text-center  font-bold">
                    <tr>
                        <th class="">ID </th>
                        <th>Photo</th>
                        <th>Name </th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-wrap text-center">
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ ++$id }}</td>
                            <td><x-employee-avatar :user="$employee->avatar" width="48" height="48" class="rounded-circle" />
                            </td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->user->email }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('admin.employees.show', $employee->id) }}"> <i class="far fa-eye"></i></a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('singlePageScript')
    <script>
        $('#employeeCalBtn').click(function() {
            $.ajax({
                url: '{{ route('admin.calEmployee') }}',
                method: 'GET',
                cache: false,
                success: function(data) {
                    $('#result').html(data);
                }
            });
        });
    </script>
@endsection
