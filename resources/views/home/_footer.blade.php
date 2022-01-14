<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>{{$setting->company}}</h3>

                        <strong>Address:</strong> {{$setting->address}}<br>
                        <strong>Phone:</strong> {{$setting->phone}}<br>
                        <strong>Fax:</strong> {{$setting->fax}}<br>
                        <strong>Email:</strong> {{$setting->email}}<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('about')}}">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('references')}}">References</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('contact')}}">İletişim</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

{{--                <div class="col-lg-3 col-md-6 footer-links">--}}
{{--                    <h4>Our Services</h4>--}}
{{--                    <ul>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="copyright-wrap d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>{{$setting->company}}</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
                    Designed by {{$setting->company}}</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="{{$setting->twitter}}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="{{$setting->facebook}}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{$setting->instagram}}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                {{--                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>--}}
                {{--                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>--}}
            </div>
        </div>

    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{asset('assets')}}/home/vendor/purecounter/purecounter.js"></script>
<script src="{{asset('assets')}}/home/vendor/aos/aos.js"></script>
<script src="{{asset('assets')}}/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/home/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('assets')}}/home/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('assets')}}/home/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('assets')}}/home/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets')}}/home//js/main.js"></script>
