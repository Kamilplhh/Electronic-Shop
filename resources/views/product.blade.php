@extends('layouts.master')
@section('title', 'Product')
@vite('resources/css/product.css')

@section('content')
@foreach($products as $product) 
<div class="product-block">
    <div class="row">
        <div class="col-8 img-block">
            <img src="{{ url('images/'.$product->src) }}" width="100%" height="100%"/>
        </div>
        <div class="col-4 name-block">
            <h2>
                {{ $product->name }}<br>
                {{ $product->price }} $
            </h2>
        </div>
    </div>

    <div class="description">
        {{ $product->description }}
    </div>
    

    <div class="buttons">
        <a href="{{ route('add_to_cart', $product->id) }}" class="add" role="button">Add to cart</a>
        <a class="add" role="button">Add to wishlist</a>
    </div>
    

    <table class="product-table">
        <tr class="second">
            <td class="category">
                Resolution
            </td>
            <td>
                {{ $product->parameter->resolution }} px
            </td>
        </tr>
        <tr>
            <td class="category">      
                Refresh rate
            </td>
            <td>
                {{ $product->parameter->hz }} hz
            </td>
        </tr>
        <tr class="second">
            <td class="category">
                RAM
            </td>
            <td>
                {{ $product->parameter->ram }}
            </td>
        </tr>
        <tr>
            <td class="category">
                Storage
            </td>
            <td>
                {{ $product->parameter->storage }}
            </td>
        </tr>
        <tr class="second">
            <td class="category">
                Front facing camera
            </td>
            <td>
                {{ $product->parameter->front_camera }}
            </td>
        </tr>
        <tr>
            <td class="category">
                Back facing camera
            </td>
            <td>
                {{ $product->parameter->back_camera }}
            </td>
        </tr>
        <tr class="second">
            <td class="category">
                GPU name
            </td>
            <td>
                {{ $product->parameter->gpu->name }}
            </td>
        </tr>
        <tr>
            <td class="category">
                GPU VRAM
            </td>
            <td>
                {{ $product->parameter->gpu->vram }}
            </td>
        </tr>
        <tr class="second">
            <td class="category">
                GPU clock
            </td>
            <td>
                {{ $product->parameter->gpu->clock }} MHz
            </td>
        </tr>
        <tr>
            <td class="category">
                GPU boost clock
            </td>
            <td>
                {{ $product->parameter->gpu->boost_clock }} MHz
            </td>
        </tr>
        <tr class="second">
            <td class="category">
                CPU name
            </td>
            <td>
                {{ $product->parameter->cpu->name }}
            </td>
        </tr>
        <tr>
            <td class="category">
                CPU cores
            </td>
            <td>
                {{ $product->parameter->cpu->cores }}
            </td>
        </tr>
        <tr class="second">
            <td class="category">
                CPU threads
            </td>
            <td>
                {{ $product->parameter->cpu->threads }}
            </td>
        </tr>
        <tr>
            <td class="category">
                CPU clock
            </td>
            <td>
                {{ $product->parameter->cpu->clock }}
            </td>
        </tr>
        <tr class="second">
            <td class="category">
                CPU boost clock
            </td>
            <td>
                {{ $product->parameter->cpu->boost_clock }}
            </td>
        </tr>
        <tr>
            <td class="category">
                CPU cache memory
            </td>
            <td>
                {{ $product->parameter->cpu->cache_memory }}
            </td>
        </tr>
    </table>
</div>    
@endforeach
@stop