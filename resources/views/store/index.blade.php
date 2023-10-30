@extends('store.layout')
@section('content')
    <div class="container">
        <h1>This Is Store Index Page.</h1>
    </div>
    <a href="{{route('products.create')}}" class="btn btn-primary">Add New Store</a>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Product name</th>
                <th>Product Cost</th>
                <th>Vendor</th>
                <th>Country</th>
                <th width="280 px">Action</th>
            </tr>
            @foreach($stores as $store)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$store->product_name}}</td>
                    <td>{{$store->product_cost}}</td>
                    <td>{{$store->vendor}}</td>
                    <td>{{$store->country}}</td>
                    <td>
                    <form href="{{route('products.destroy',$store->id)}}" method="POST">
                        <a href="{{route('products.edit',$store->id)}}" class="btn btn-info">Edit</a>
                        <a href="{{route('products.show',$store->id)}}" class="btn btn-primary">Details</a>
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