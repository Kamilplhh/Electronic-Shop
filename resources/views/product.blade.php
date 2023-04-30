@extends('layouts.master')
@section('title', 'Product')

@section('content')
@foreach($products as $product) 
    <img src="{{ url('images/'.$product->src) }}"/>
    {{ $product->name }}
    {{ $product->price }} $
    <a href="{{ route('add_to_cart', $product->id) }}" class="add" role="button">Add to cart</a>
@endforeach
@stop