@extends('layouts.main')


@section('judul')
INVENTORY DATA TABEL
@endsection


    @section('isi')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
            <form class="form-left my-2" method="get" action="{{ route('search') }}">
                    <div class="form-group w-80 mb-3">
                        <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="Enter product name">
                        <button type="submit" class="btn btn-primary mb-1">Search</button>
                        <a class="btn btn-success right" href="{{ route('products.create') }}" style="margin-left:5cm"> Add Product Data</a>
                    </div>
            </form>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Product ID</th>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Product Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $Products)
        <tr>
            <td>{{ $Products->product_id }}</td>
            <td>{{ $Products->product_code }}</td>
            <td>{{ $Products->product_name }}</td>
            <td>{{ $Products->product_category }}</td>
            <td>{{ $Products->price }}</td>
            <td>{{ $Products->quantity }}</td>
            <td>
            <form action="{{ route('products.destroy',$Products->product_id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('products.show',$Products->product_id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('products.edit',$Products->product_id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
{!! $products->withQueryString()->links('pagination::bootstrap-5') !!}
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
    @endsection