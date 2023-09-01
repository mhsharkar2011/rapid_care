@extends('layouts.app')
@section('title')
    Employee List
@endsection

@section('content')
<style>
th,td{
    text-align: center;
}
</style>
    <div class="mt-5 text-center">
        <p><button class="btn btn-primary mr-5" id="employeeCalBtn">Employee Statistics</button>
            {{-- <a href="{{ route('admin.employees.create') }}" class="btn btn-primary ml-5">Add New Employee</a> --}}
        </p>
        
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div id="result">
                
            </div>
        </div>
    </div>
    <h3 class="text text-primary text-center mt-5">List of Employee</h3>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                          <th>Employee Id </th>
                          <th>Photo</th>
                          <th>Name </th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($employees as $employee)
                         
                    
                    <tr>
                        <td>{{ ++$id }}</td>
                        <td><x-employee-avatar :user="$employee->avatar" width="48" height="48" class="rounded-circle" /></td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->user->email }}</td>
                        <td><a href="{{ route('admin.employees.show', $employee->id) }}"> <i class="fas fa-eye text-info"></i></a></td>
                        <td><a href="{{ route('admin.employees.destroy', $employee->id) }}"><i class="fas fa-times-circle text-danger"></i></a></td>
             
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $employees->links('components.pagination') }}
        </div>
    </div>
@endsection

@section('singlePageScript')
    <script>
        $('#employeeCalBtn').click(function(){
            $.ajax({
                url: '{{ route('admin.calEmployee') }}',
                method: 'GET',
                cache: false,
                success: function(data){
                    $('#result').html(data);
                }
            });
        });
    </script>
@endsection