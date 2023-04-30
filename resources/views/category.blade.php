@extends('layouts.master')
@section('title', 'Categories')

@section('content')
    @foreach($categories as $category)
        <a href="{{ $category->id }}">
        <img src="{{ url('images/'.$category->src) }}"/>
        {{ $category->name }}</a> 
    @endforeach
@stop