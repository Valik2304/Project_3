@extends('layouts.home')

@section('header')
    <ul><li><h3><a href="{!!route('home') !!}">на головну сторінку</a></h3></li></ul>
    @include('site.header')
@endsection

@section('catalog_content')
    <h2 align="center">Вхід в акаунт або створення нового</h2>
    @include('Account.login_content')
@endsection