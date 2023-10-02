@extends('school.layout')
@section('content')

    <div class="container">
        <h2>This is Repository Create Page</h2>
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
        <form action="{{route('schools.store')}}" method="POST">
            @csrf
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" class="form-control" placeholder="Enter School Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Location</strong>
                    <input type="text" name="location" class="form-control" placeholder="Enter School Location">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>City</strong>
                    <input type="text" name="city" class="form-control" placeholder="Enter School City">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Result</strong>
                    <input type="text" name="result" class="form-control" placeholder="Enter School Result">
                </div>
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
@endsection