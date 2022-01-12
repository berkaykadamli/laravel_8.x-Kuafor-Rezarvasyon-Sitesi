@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp

@extends('layouts.home')

@section('title','User Profile')


@section('content')
    <section class="faq">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-lg-2 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
                        <div class="icon-box mt-5 mt-lg-0" data-aos-delay="100"  data-aos="zoom-in">
                            <h4>User Panel</h4>
                            <ul>
                                <li><a href="{{route('profile')}}">My Profile</a></li>
                                <li><a href="#">My Reservation</a></li>
                                <li><a href="{{route('logout')}}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="image col-lg-10 order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="100">
                        @include('profile.show')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

