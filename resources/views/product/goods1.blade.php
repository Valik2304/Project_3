@extends('layouts.home')

@section('header')
    <ul><li><h3><a href="{!!route('home') !!}">Головна сторінка</a></h3></li></ul>
    @include('site.header')
@endsection

@section('catalog')
    @include('site.catalog')
@endsection

@section('catalog_content')
    @include('product.catalog_content')
@endsection