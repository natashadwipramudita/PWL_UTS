@extends('products.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Product Data
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('products.update', $products->product_id) }}" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="product_code">Product Code</label>
                            <input type="product_code" name="product_code" class="form-control" id="product_code"
                                value="{{ $products->product_code }}" aria-describedby="product_code">
                        </div>
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="product_name" name="product_name" class="form-control" id="product_name"
                                value="{{ $products->product_name }}" aria-describedby="product_name">
                        </div>
                        <div class="form-group">
                            <label for="product_category">Product Category</label>
                            <input type="product_category" name="product_category" class="form-control"
                                id="product_category" value="{{ $products->product_category }}"
                                aria-describedby="product_category">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="price" name="price" class="form-control" id="price"
                                value="{{ $products->price }}" aria-describedby="price">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="quantity" name="quantity" class="form-control" id="quantity"
                                value="{{ $products->quantity }}" aria-describedby="quantity">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
