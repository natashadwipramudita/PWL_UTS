@extends('products.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Product Data
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Product ID: </b>{{$products->product_id}}</li>
                    <li class="list-group-item"><b>Product Code: </b>{{$products->product_code}}</li>
                    <li class="list-group-item"><b>Product Name: </b>{{$products->product_name}}</li>
                    <li class="list-group-item"><b>Product Category: </b>{{$products->product_category}}</li>
                    <li class="list-group-item"><b>Price: </b>{{$products->price}}</li>
                    <li class="list-group-item"><b>Quantity: </b>{{$products->quantity}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{ route('products.index') }}">Back</a>
        </div>
    </div>
</div>
@endsection