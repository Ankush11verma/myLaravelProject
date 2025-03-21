@extends('layouts.app')

@section('title', 'Cart')

@section('content')
    <h2>Your Cart</h2>
    @if(count($cart) > 0)
        <ul>
            @foreach($cart as $item)
                <li>{{ $item->name }} - ${{ $item->price }}</li>
            @endforeach
        </ul>
    @else
        <p>No items in cart.</p>
    @endif
@endsection
