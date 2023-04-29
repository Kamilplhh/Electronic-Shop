@extends('layouts.master')
@section('title', 'Product')

@section('content')
@foreach($products as $product) 
    {{ $product->src }}
    {{ $product->name }}
    {{ $product->price }}
    {{ $product->category->name }}<br>
    <a href="{{ route('add_to_cart', $product->id) }}" class="add" role="button">Add to cart</a>
@endforeach
@stop