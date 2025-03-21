@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <h2>Our Shoes</h2>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/' . $product->image) }}" class="card-img-top">
                    <div class="card-body">
                        <h5>{{ $product->name }}</h5>
                        <p>${{ $product->price }}</p>
                        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
