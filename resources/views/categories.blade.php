@extends('layouts.master')
@section('title', 'Category')

@section('content')
    @foreach($products as $product)
    <a href="/product/{{ $product->id }}">
        {{ $product->src }}
        {{ $product->name }}
        {{ $product->price }}
    </a>
    @endforeach
@stop