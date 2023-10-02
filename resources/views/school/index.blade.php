@extends('school.layout')
@section('content')
    <div class="container">
        <h2>This is Repository CRUD Index Page</h2>
    </div>
    <a class="btn btn-primary" href="{{route('schools.create')}}">Add New School</a>
     
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Location</th>
                <th>City</th>
                <th>Result</th>
                <th width="280 px">Action</th>
            </tr>
            @foreach($schools as $school)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$school->name}}</td>
                    <td>{{$school->location}}</td>
                    <td>{{$school->city}}</td>
                    <td>{{$school->result}}</td>
                    <td>
                        <form action="{{route('schools.destroy', $school->id)}}" method="POST">
                            <a class="btn btn-info" href="{{route('schools.edit', $school->id)}}">Edit</a>
                            <a class="btn btn-primary" href="{{route('schools.show', $school->id)}}">Details</a>
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection