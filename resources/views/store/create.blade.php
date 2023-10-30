@extends('store.layout')
@section('content')
    <div class="container">
        <h2>THis is Create Page For Store Mgt.</h2>
    </div>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-control">
                <strong>Product Name</strong>
                <input type="text"  name="product_name" class="form-control" placeholder="Enter Product Name">
            </div>
        </div>

        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
                <strong>Product Cost</strong>
                <input type="text"  name="product_cost" class="form-control" placeholder="Enter Product Cost">
            </div>
        </div>

        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-control">
                <strong>Vendor</strong>
                <input type="text"  name="vendor" class="form-control" placeholder="Enter Product Vendor Name">
            </div>
        </div>

        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-control">
                <strong>Country</strong>
                <input type="text"  name="country" class="form-control" placeholder="Enter Product Country Name">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection