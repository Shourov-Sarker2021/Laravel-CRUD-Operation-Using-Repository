@extends('layouts.app')

@section('content')
    <div class="container">
       <div>
            <h2>This is Our Main Page page</h2>
       </div> 
        
    <div class="container">
        <table class=""table table-bordered>
            @csrf
             

            <div class="container">
                <strong>School Category Section</strong>
                <a class="btn btn-primary" href="{{route('schools.index')}}">Click here to go School Page</a>
            </div>

             

            

            
            <button type="submit" class="btn btn-info">Submit</button>
        </table>
    </div>
    </div>
@endsection
