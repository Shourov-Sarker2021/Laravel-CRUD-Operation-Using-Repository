@extends('city.layout')
@section('content')

    <div class="container">
        <h2>This is City Create Page</h2>
    </div>
        <div>
            <a href="{{route('city.index')}}" class="btn btn-primary">Back to Home Page</a>
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
        <form action="{{route('city.store')}}" method="POST">
            @csrf
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>City Name</strong>
                    <input type="text" name="city_name" class="form-control" placeholder="Enter Your City Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Location</strong>
                    <input type="text" name="location" class="form-control" placeholder="Enter City Location">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Population</strong>
                    <input type="text" name="population" class="form-control" placeholder="Enter City People">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hospitality</strong>
                    <input type="text" name="hospitality" class="form-control" placeholder="Enter City Total Hospital">
                </div>
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
@endsection