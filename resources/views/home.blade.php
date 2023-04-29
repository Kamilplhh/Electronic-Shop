@extends('layouts.master')
@section('title', 'Home')

@section('content')
<div class="imageslider">
    
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
                    {{ $product->category->name }}<br>
                    <a href="/product/{{ $product->id }}">
                    {{ $product->name }}</a><br>
                    {{ $product->price }}<br>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
<a href="{{ route('add_to_cart', $product->id) }}" class="add" role="button">Add to cart</a>
@stop