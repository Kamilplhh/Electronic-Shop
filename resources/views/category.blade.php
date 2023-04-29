@extends('layouts.master')
@section('title', 'Categories')

@section('content')
    @foreach($categories as $category)
        {{ $category->src }}
        <a href="{{ $category->id }}">{{ $category->name }}</a> 
    @endforeach
@stop