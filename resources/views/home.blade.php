@extends('layouts.app')

@section('content')
    <div class="container">
       <div>
            <h2>This is all of our vendor page</h2>
       </div> 
       <a class="btn btn-primary" href="{{route('universitys.index')}}">Back to main page</a>
    <div class="container">
        <table class=""table table-bordered>
            @csrf
            <div class="container" style="padding: 20px;">
                <strong>College Category Section</strong>
                <a class="btn btn-primary" href="{{route('colleges.index')}}">Click here to go College Page</a>
            </div>
            <div class="container" style="padding: 20px;">
                <strong>Product Category Section</strong>
                <a class="btn btn-primary" href="{{route('products.index')}}">Click here to go Product Page</a>
            </div>

            <div class="container"style="padding: 20px;">
                <strong>Teachers Category Section</strong>
                <a class="btn btn-primary" href="{{route('teachers.index')}}">Click here to go Teacher Page</a>
            </div>

            <div class="container">
                <strong>School Category Section</strong>
                <a class="btn btn-primary" href="{{route('schools.index')}}">Click here to go School Page</a>
            </div>

            <div class="container"style="padding: 20px;">
                <strong>Store Category Section</strong>
                <a class="btn btn-primary" href="{{route('stores.index')}}">Click here to go Store Page</a>
            </div>

            <div class="container"style="padding: 20px;">
                <strong>Students Category Section</strong>
                <a class="btn btn-primary" href="{{route('students.index')}}">Click here to go Students Page</a>
            </div>

            <div class="container">
                <strong>University Category Section</strong>
                <a class="btn btn-primary" href="{{route('universitys.index')}}">Click here to go University Page</a>
            </div>

            

            
            <button type="submit" class="btn btn-info">Submit</button>
        </table>
    </div>
    </div>
@endsection
