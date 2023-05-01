@extends('layouts.master')
@section('title', 'Home')

@section('content')
@vite('resources/js/home.js')
<div class="imageslider">
    <div class="slider">
        <i class="fa-solid fa-angles-left fa-2x previous"></i>
        <div class="img-container">
            @foreach ($sliders as $slide)
            <img id="img-in-slider" src="{{ url('images/'.$slide->src) }}" width="100%" height="100%">
            @endforeach
        </div>
        <i class="fa-solid fa-angles-right fa-2x next"></i>
    </div>
</div>

<div class="block">
    <div class="row justify-content-md-center">
        @foreach($products as $product)
        <div class="col-xl-4 col-lg-6 col-md-8 col-12 grid">
            <div class="product">
                <div class="image">
                    <a href="/product/{{ $product->id }}"><img src="{{ url('images/'.$product->src) }}" alt="siema" width="100%" height="100%"></a>
                </div>
                <div class="product-desc">
                    <a href="/product/{{ $product->category->id }}">
                        {{ $product->category->name }}</a><br>
                    <a href="/product/{{ $product->id }}">
                        {{ $product->name }}</a><br>
                    {{ $product->price }} $<br>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop