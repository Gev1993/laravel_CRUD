@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color: white">Laravel 7 CRUD</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('products.create') }}" class="btn btn-outline-success"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-hover table-dark">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th style="width: 200px">Action</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('products.show',$product->id) }}" class="btn btn-outline-warning">Show</a> <br>
                        <a href="{{ route('products.edit',$product->id) }}" class="btn btn-outline-primary">Edit</a> <br>
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection
