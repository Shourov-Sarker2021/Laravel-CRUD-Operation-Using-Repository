@extends('city.layout')
@section('content')
    <div class="container">
        <h2>This is Index Page</h2>
    </div>
    <div class="container">
        <a href="{{route('city.create')}}" class="btn btn-info">Add to City</a>
    </div>
    <!-- @if($errors->any())
            <div class="alert alert-danger">
            <strong>Whops@</strong>there are some problem.
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            
            @endforeach
            </div>
        @endif -->
        <div class="container">
                <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>City Name</th>
                    <th>Location</th>
                    <th>Population</th>
                    <th>Hospitality</th>
                    <th width="280 px">Action</th>
                </tr>
                @foreach($citys as $city)
                    <tr>
                        
                            <td>{{++$i}}</td>
                            <td>{{$city->city_name}}</td>
                            <td>{{$city->location}}</td>
                            <td>{{$city->population}}</td>
                            <td>{{$city->hospitality}}</td>
                            <td>
                            <form action="{{route('city.destroy',$city->id)}}" method="POST">
                                <a href="{{route('city.edit',$city->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('city.show',$city->id)}}" class="btn btn-primary">Details</a>
                                @csrf 
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>  
                            </td>
                        
                    </tr>
                @endforeach
            </table>
        </div>
@endsection