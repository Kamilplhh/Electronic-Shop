@extends('layouts.master')
@section('title', 'Profile')
@vite('resources/css/profile.css')

@section('content')
<div class="content">
    @foreach($user as $user)
    <h1 style="width: 100%;">Hello {{ $user->name }}</h1><br>
    @endforeach
    <div class="wishlist">
        <h1>Wishlist:</h1>
        <div class="row">
            <div class="product-profile">
                @forelse($objects as $object)
                    <div class="product-image col-lg-6 col-md-12 col-12"">
                        <a href="/product/{{ $object->product->id }}">
                            <img src="{{ url('images/'.$object->product->src) }}" width="60%" height="100%"/>
                        </a>
                        <a href="/deleteobject/{{ $object->id }}"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></a>
                    </div>
                @empty
                <h5 class="col-12 center">Wishlist is empty</h5>
                @endforelse
            </div>
        </div>
    </div>
</div>
@stop