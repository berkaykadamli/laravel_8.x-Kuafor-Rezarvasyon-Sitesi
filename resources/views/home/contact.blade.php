@php
    $parentCategories=\App\Http\Controllers\HomeController::categoryList()
@endphp
@extends('layouts.home')

@section('title','Contact - ',$setting->title)
@section('description'){{$setting->description}}@endsection

@section('author',$setting->company)
@section('content')

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>İletişim</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>İletişim</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="contact section-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 ">
                        {{--                        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>--}}
                        {!! $setting->contact !!}
                    </div>

                    <div class="col-lg-6">
                        @include('home.message')

                        <form action="{{route('sendmessage')}}" method="post">
                            <!--class="php-email-form"-->
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                           placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="phone" id="subject" placeholder="Phone"
                                       required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                          required></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" style="background: #7b27d8">Send Message</button>
                            </div>
                        </form>
                    </div>

                </div>
                <p>

                </p>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
