@php
    $parentCategories= \App\Http\Controllers\HomeController::categoryList();
        $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp
@extends('layouts.home')

@section('title','Category Services')


@section('content')
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>



            <div class="row portfolio-container">
                @foreach($datalist as $db)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{\Illuminate\Support\Facades\Storage::url($db->image)}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{$db->title}}</h4>
                                <p>{{$db->description}}</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="{{\Illuminate\Support\Facades\Storage::url($db->image)}}" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                                <a href="{{route('servicedetail',['id'=>$db->id])}}" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </section><!-- End Portfolio Section -->

