@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Patients List</h2>
        </div>
    </div>
</div>
<div class="row">
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>Photo</th>
            <th>Patient Name</th>
            <th>Patient Details</th>
            <th>Patient Status</th>
            <th>Action</th>
        </tr>
        @foreach ($records as $record)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/uploads/patients/{{ $record->image }}" height="50px"></td>
            <td>{{ $record->name }}</td>
            <td>{{ substr($record->patientDetails,0,200) }}</td>
            <td>{{ $record->patientStatus }}</td>
            <td>
                <a class="btn btn-sm btn-info" href="{{ route('patients.show',$record->id) }}"><i class="fas fa-user-circle"></i></a>
                <a class="btn btn-sm btn-primary" href="{{ route('patients.edit',$record->id) }}"><i class="fas fa-edit"></i></a>
                <form action="{{ route('patients.destroy',$record->id) }}" method="POST">
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