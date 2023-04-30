@extends('layouts.master')
@section('title', 'Categories')
@vite('resources/css/category.css')

@section('content')
<div class="row">
    @foreach($categories as $category)
        <div class="col-xl-4 col-lg-6 col-md-8 col-12">
            <div class="category-block">
                <div class="image-block">
                    <a href="{{ $category->id }}">
                    <img src="{{ url('images/'.$category->src) }}" width="100%" height="100%"/>
                </div>
                {{ $category->name }}</a> 
            </div>
        </div>
    @endforeach
</div>
@stop