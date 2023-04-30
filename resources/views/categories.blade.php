@extends('layouts.master')
@section('title', 'Category')
@vite('resources/css/category.css')

@section('content')
<div class="row justify-content-md-center">
    @foreach($products as $product)
    <div class="col-xl-6 col-md-12 col-12">
        <div class="category-block">
            <a href="/product/{{ $product->id }}">
                <div class="image-block">
                    <img src="{{ url('images/'.$product->src) }}" width="100%" height="100%" />
                </div>
                {{ $product->name }}<br>
                {{ $product->price }} $
            </a>
        </div>
    </div>
    @endforeach
</div>
@stop