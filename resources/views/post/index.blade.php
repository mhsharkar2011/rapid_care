@extends('layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Employee List</h2>
            </div>
            
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     <div class="row">
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>Photo</th>
            <th>Item Name</th>
            <th>Item description</th>
            <th>Action</th>
        </tr>
        @foreach ($records as $record)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/uploads/{{ $record->image }}" height="50px"></td>
            <td>{{ $record->title }}</td>
            <td>{{ substr($record->body,0,200) }}</td>
            <td>
                <a class="btn btn-sm btn-info" href="{{ route('posts.show',$record->id) }}"><i class="fas fa-user-circle"></i></a>
                <a class="btn btn-sm btn-primary" href="{{ route('posts.edit',$record->id) }}"><i class="fas fa-edit"></i></a>
                <form action="{{ route('posts.destroy',$record->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="container">
        <div class="paginate">
            {!! $records->links() !!}
        </div>
    </div>
    
    </div>
    
        
@endsection