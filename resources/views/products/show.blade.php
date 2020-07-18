@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color: white"> Show Product</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('products.index') }}" class="btn btn-outline-info"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: white">Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: white">Details:</strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>
@endsection
