@extends('city.layout')
@section('content')

    <div class="container">
        <h2>This is City Edit Page</h2>
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
        <form action="{{route('city.update',$city->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>City Name</strong>
                    <input type="text" name="city_name" class="form-control" value="{{$city->city_name}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Location</strong>
                    <input type="text" name="location" class="form-control" value="{{$city->location}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Population</strong>
                    <input type="text" name="population" class="form-control"  value="{{$city->population}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hospitality</strong>
                    <input type="text" name="hospitality" class="form-control"  value="{{$city->hospitality}}">
                </div>
            </div>
            <button type="submit" class="btn btn-info">Update</button>
        </form>
    </div>
@endsection