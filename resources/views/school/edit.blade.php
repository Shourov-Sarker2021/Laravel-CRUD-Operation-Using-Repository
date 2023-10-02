@extends('school.layout')
@section('content')

    <div class="container">
        <h2>This is Repository Edit Page</h2>
    </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Whops@</strong>some problem
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif
    <div class="container">
        <form action="{{route('schools.update', $school->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong></br>
                    <input type="text" name="name" class="form-control" value="{{$school->name}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Location</strong></br>
                    <input type="text" name="location" class="form-control" value="{{$school->location}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>City</strong></br>
                    <input type="text" name="city" class="form-control" value="{{$school->city}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Result</strong>
                    <input type="text" name="result" class="form-control" value="{{$school->result}}">
                </div>
            </div>
            <button type="submit" class="btn btn-info">Update</button>
        </form>
    </div>
@endsection