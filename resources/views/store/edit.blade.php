@extends('store.layout')
@section('content')
    <div class="container">
        <h2>THis is Edit Page For Store Mgt.</h2>
    </div>
    <a href="{{route('products.index')}}" class="btn btn-primary">Back to Home Page</a>
    <form action="{{route('products.update',[($store->id)])}}" method="POST">
        @csrf
        @method("PUT")
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-control">
                <strong>Product Name</strong>
                <input type="text"  name="product_name" class="form-control" value="{{$store->product_name}}">
            </div>
        </div>

        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Product Cost</strong>
                <input type="text"  name="product_cost" class="form-control" value="{{$store->product_cost}}">
            </div>
        </div>

        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-control">
                <strong>Vendor</strong>
                <input type="text"  name="vendor" class="form-control" value="{{$store->vendor}}">
            </div>
        </div>

        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-control">
                <strong>Country</strong>
                <input type="text"  name="country" class="form-control"  value="{{$store->country}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection