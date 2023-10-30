@extends('city.layout')
@section('content')

    <div class="container">
        <h2>This is City Details Page</h2>
    </div>
        <div>
            <a href="{{route('city.index')}}" class="btn btn-primary">Back to Home Page</a>
        </div>
        
    <div class="container">
        <form>
            @csrf
             
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>City Name</strong></br>
                      {{$city->city_name}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Location</strong></br>
                     {{$city->location}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Population</strong></br>
                     {{$city->population}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hospitality</strong></br>
                     {{$city->hospitality}}
                </div>
            </div>
             
        </form>
    </div>
@endsection