@php
    $parentCategories=\App\Http\Controllers\HomeController::categoryList()
@endphp
@extends('layouts.home')

@section('title',$setting->title)
@section('description'){{$setting->description}}@endsection

@section('author',$setting->company)

{{--@include('home._hero')--}}
@section('content')
    @include('home._content')
@endsection

