<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="@yield('description')" name="description">
    <meta content="@yield('author')" name="keywords">
    <!-- Favicons -->
    <link href="{{asset('assets')}}/home//img/favicon.png" rel="icon">
    <link href="{{asset('assets')}}/home/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets')}}/home/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{asset('assets')}}/home//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/home//vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('assets')}}/home//vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/home//vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/home//vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets')}}/home//css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Techie - v4.7.0
    * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    @yield('css')
    @yield('js')
</head>
<body>

@include('home._header')
@yield('content')
@include('home._footer')

</body>
</html>
