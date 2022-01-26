@php
    $parentCategories= \App\Http\Controllers\HomeController::categoryList();
        $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp
@extends('layouts.home')

@section('title','User Profile')


@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portfolio Details</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>{{$data->title}} Details</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                @foreach($image as $img)
                                    <div class="swiper-slide">
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($img->image)}}"
                                             style="height: 50%;width: 50%" alt="">
                                    </div>
                                @endforeach

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Service information</h3>
                            <ul>
                                <li><strong>Service</strong>: {{$data->title}}</li>
                                <li><strong>Keyword</strong>: {{$data->keywords}}</li>
                                <li><strong>Detail</strong>: {!! $data->detail !!}</li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            @php
                                $avgrev=\App\Http\Controllers\HomeController::averagereview($data->id);
                                $countrev=\App\Http\Controllers\HomeController::countreview($data->id);
                            @endphp
                            <h2>{{$countrev}} Review(s)  </h2>
                            @foreach($reviews as $rs)
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <h3>{{$rs->user->name}}</h3>
                                        Rate : {{$rs->rate}}/5
                                        <h4>{{$rs->user->created_at}}</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            {{$rs->review}}
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>

                                            <hr>

                                        </p>

                                    </div>
                                </div><!-- End testimonial item -->
                            @endforeach
                        </div>
                        <div class="portfolio-description">
                            <h2>Review</h2>
                            <p>
                                @livewire('review',['id'=>$data->id])
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

@endsection

