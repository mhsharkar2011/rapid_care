@extends('layouts.app')
@section('title')
    user List
@endsection

@section('content')
<style>
th,td{
    text-align: center;
}
</style>
    <div class="mt-5 text-center">
        <p><button class="btn btn-primary mr-5" id="userCalBtn">User Statistics</button>
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary ml-5">Add New User</a>
        </p>
        
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div id="result">
                
            </div>
        </div>
    </div>
    <h3 class="text text-primary text-center mt-5">List of user</h3>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                          <th>User Id </th>
                          <th>Name </th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Status</th>
                          <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($users as $user)
                         
                    
                    <tr>
                        <td>{{ ++$id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        @if ($user->type == 'PATIENT')
                        <td class="text-success">{{ $user->type }}</td>
                        @elseif ($user->type == 'DOCTOR')
                        <td class="text-info">{{ $user->type }}</td>
                        @else
                        <td class="text-danger">{{ $user->type }}</td>
                        @endif
                        <td>
                            <form action="{{ route('admin.users.update-status', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                    <div>
                                        <select style="display:none" name="status" id="status" class="badge bg-inverse-primary ml-2">
                                            @if ($user->status == 'ACTIVE')
                                            <div class=" badge bg-inverse-success ml-2">
                                            <option value="INACTIVE" {{ $user->status == 'INACTIVE' ? 'selected' : '' }}></option>
                                            </div>
                                            @else
                                            <option value="ACTIVE" {{ $user->status == 'ACTIVE' ? 'selected' : '' }}></option>
                                            @endif
                                        </select>
                                    </div>
                        
                                <button type="submit" class="btn">
                                    @if ($user->status != 'ACTIVE')
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
                        <td>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" value="" class="btn btn-danger" ><i class="far fa-trash-alt"></i></button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <div class="pagination justify-content-center">
                    {{-- {{ $users->links() }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('singlePageScript')
    {{-- <script>
        $('#userCalBtn').click(function(){
            $.ajax({
                url: '{{ route('admin.users.calculate') }}',
                method: 'GET',
                cache: false,
                success: function(data){
                    $('#result').html(data);
                }
            });
        });
    </script> --}}
@endsection