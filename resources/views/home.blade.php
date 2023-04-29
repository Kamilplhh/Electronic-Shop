@extends('layouts.master')
@section('title', 'Home')

@section('content')
    @foreach($products as $product)
    <a href="/product/{{ $product->id }}">
        {{ $product->src }}
        {{ $product->name }}
        {{ $product->price }}
    </a>
        {{ $product->category->name }}<br>
        <a href="{{ route('add_to_cart', $product->id) }}" class="add" role="button">Add to cart</a>
    @endforeach
@stop