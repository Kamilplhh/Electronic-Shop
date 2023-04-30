@extends('layouts.master')
@section('title', 'Category')

@section('content')
    @foreach($products as $product)
    <a href="/product/{{ $product->id }}">
        <img src="{{ url('images/'.$product->src) }}"/>
        {{ $product->name }}
        {{ $product->price }} $
    </a>
    @endforeach
@stop