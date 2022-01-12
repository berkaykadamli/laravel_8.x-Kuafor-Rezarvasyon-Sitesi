@php
    $parentCategories= \App\Http\Controllers\HomeController::categoryList();
        $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp


<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="{{route('home')}}">{{$setting->title}}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto " href="{{route('home')}}">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto " href="#pricing">Pricing</a></li>
                @include('home._category')
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li><a class="nav-link scrollto" href="{{route('faq')}}">Faq</a></li>
                <li><a class="nav-link scrollto" href="{{route('about')}}">About Us</a></li>

                @if(\Illuminate\Support\Facades\Auth::check())
                    <li class="dropdown"><a href="#"><span>{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                            <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a href="{{route('profile')}}"><span>My Account</span></a>
                            <li class="dropdown"><a href="{{route('admin_logout')}}"><span>Logout</span></a>
                        </ul>
                @else
                    <li><a class="nav-link scrollto" href="{{route('login')}}"><span>Login</span></a></li>
                    <li><a class="nav-link scrollto" href="{{route('register')}}"><span>Sign Up</span></a></li>

                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
