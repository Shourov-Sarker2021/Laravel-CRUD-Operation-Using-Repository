@extends('school.layout')
@section('content')

    <div class="container">
        <h2>This is Show Page</h2>
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
        
            @csrf
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong></br>
                     {{$school->name}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Location</strong></br>
                     {{$school->location}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>City</strong></br>
                     {{$school->city}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Result</strong>
                     {{$school->result}}
                </div>
            </div>
            <a class="btn btn-info" href="{{route('schools.index')}}">Back To Home Page</a>

    </div>
@endsection