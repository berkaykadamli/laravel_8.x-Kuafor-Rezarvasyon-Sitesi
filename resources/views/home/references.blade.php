@php
    $parentCategories=\App\Http\Controllers\HomeController::categoryList()
@endphp
@extends('layouts.home')

@section('title','References - ',$setting->title)
@section('description'){{$setting->description}}@endsection

@section('author',$setting->company)
@section('content')

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>References</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>References</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <p>
                    {!! $setting->references !!}
                </p>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
