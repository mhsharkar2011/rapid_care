@extends('layouts.app')
@section('title')
    Doctor List
@endsection

@section('content')
<style>
th,td{
    text-align: center;
}
</style>
    <div class="mt-5 text-center">
        <p><button class="btn btn-primary mr-5" id="doctorCalBtn">Doctor Statistics</button>
            {{-- <a href="{{ route('admin.doctors.create') }}" class="btn btn-primary ml-5">Add New Doctor</a> --}}
        </p>
        
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div id="result">
                
            </div>
        </div>
    </div>
    <h3 class="text text-primary text-center mt-5">List of doctor</h3>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                          <th>Doctor Id </th>
                          <th>Photo</th>
                          <th>Name </th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($doctors as $doctor)
                         
                    
                    <tr>
                        <td>{{ ++$id }}</td>
                        <td><x-doctor-avatar :user="$doctor->avatar" width="48" height="48" class="rounded-circle" /></td>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->phone }}</td>
                        <td>{{ $doctor->user->email }}</td>
                        <td><a href="{{ route('admin.doctors.show', $doctor->id) }}"> <i class="fas fa-eye text-info"></i></a></td>
                        <td><a href="{{ route('admin.doctors.destroy', $doctor->id) }}"><i class="fas fa-times-circle text-danger"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $doctors->links('components.pagination') }}
        </div>
    </div>
@endsection

@section('singlePageScript')
    <script>
        $('#doctorCalBtn').click(function(){
            $.ajax({
                url: '{{ route('admin.calDoctor') }}',
                method: 'GET',
                cache: false,
                success: function(data){
                    $('#result').html(data);
                }
            });
        });
    </script>
@endsection