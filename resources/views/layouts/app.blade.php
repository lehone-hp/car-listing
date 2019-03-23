<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEAT CO LTD - @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('NEAT-LOGO.png') }}">

    <!--Plugin CSS-->
    <link href="{{ asset('css/plugins.min.css') }}" rel="stylesheet">
    <link href="{{ asset('toastr/toastr.min.css') }}" rel="stylesheet"/>

    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">--}}

    <!--main Css-->
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
</head>
@yield('loader')
<body>
<!-- Header-->
<header id="header-fix" class="main-header">
    <div class="top-bar py-lg-0 py-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-center text-md-left align-self-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="mailto:{{ settings('contact_email', 'neatlimbe@camnet.cm') }}"><i class="fa fa-envelope pr-1"></i> {{ settings('contact_email', 'neatlimbe@camnet.cm') }} </a></li>
                        <li class="list-inline-item"><a href="tel:{{ settings('contact_phone', '237 233 33 21 50') }}"><i class="fa fa-phone pr-1"></i> {{ settings('contact_phone', '237 233 33 21 50') }}</a></li>
                    </ul>
                </div>
                {{--
                <div class="col-12 col-md-6 text-center text-md-right">
                    <div class="top-right">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><i class="fa fa-user pr-1"></i> <a href="#signup" class="c-primary login_form"> Login </a> Or <a href="#signup" class="register_form c-primary"> Register </a></li>
                            <li class="list-inline-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-language pr-1"></i> ENG </a>
                                <div class="dropdown-menu rounded-0 border-0 py-0">
                                    <a class="dropdown-item" href="#">English</a>
                                    <a class="dropdown-item" href="#">French</a>
                                    <a class="dropdown-item" href="#">Russian</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                --}}
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 py-3 px-0">
            <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('images/logo-v1.png') }}" alt="" class="img-fluid" /></a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-lg-4 mt-4 mt-lg-0">
                    <li class="nav-item"><a class="nav-link {{ Request::is('/') ? "active" : "" }}" href="{{ route('index') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('car-listing*') || Request::is('single-car*') ? "active" : "" }}" href="{{ route('listing') }}">Car listing</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('services') ? "active" : "" }}" href="{{ route('services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('about-us') ? "active" : "" }}" href="{{ route('aboutus') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('contact') ? "active" : "" }}" href="{{ route('contact') }}">Contact</a></li>
                    <form class="form-inline my-2 my-lg-0" action="{{ route('listing') }}">
                        <div class="form-group position-relative mb-0">
                            <input class="form-control ml-sm-2 rounded-0" name="q"
                                   type="search" placeholder="Search by model, name...">
                            <div class="search position-absolute">
                                <a onclick="$(this).closest('form').submit()" href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </form>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- End Header-->

@yield('content')

<!-- Subscribe-->
<section class="py-4 c-bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mb-4 mb-lg-0 align-self-center">
                <div class="media d-block d-md-flex">
                    <div class="d-md-flex mr-sm-3 mb-3 mb-md-0 align-self-center">
                        <h5 class="text-white c-font-weight-600 c-open-sans mb-0 c-line-height-1_5">Subscribe to our Mailing List <br>and get Latest Updates</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <label class="text-white h6">Subscribe</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter your email address...">
                    <div class="input-group-append">
                        <a href="#" class="input-group-text c-bg-dark border-0 text-white"><i class="fa fa-paper-plane-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Subscribe-->

<!-- Footer Top -->
<section class="footer c-bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mb-4 mb-lg-0">
                <div class="row">
                    <div class="col-12 col-sm-6 mb-4 mb-sm-0">
                        <h6 class="text-white">Overview</h6>
                        <ul class="list-unstyled footer-links mb-0">
                            <li><a href="#"><i class="fa fa-angle-right pr-2"></i> About Us</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Feedback</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Advertise with us</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Contact Us</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-2"></i> FAQs</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Sitemap</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h6 class="text-white">Other Pages</h6>
                        <ul class="list-unstyled footer-links mb-0">
                            <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Careers</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Customer Care</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Privacy Policy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Terms & Conditions</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-2"></i> Sitemapa </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <h6 class="text-white">Contact Info</h6>
                <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim aliquam.</p>
                <ul class="list-unstyled footer-address mb-0">
                    <li><a href="#"><i class="fa fa-map-marker pr-2"></i> {{ settings('contact_address', 'NEAT Building - Between Presbook & BICEC, Ahidjo Street - Bown Beach - Limbe') }}</a></li>
                    <li><a href="tel:+1 212-725-5400"><i class="fa fa-phone pr-2"></i> {{ settings('contact_phone', '237 233 33 21 50') }}</a></li>
                    <li><a href="mailto:"><i class="fa fa-envelope pr-2"></i> {{ settings('contact_email', 'neatlimbe@camnet.cm') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Footer Top-->

<!-- Footer Bottom -->
<section class="footer-bottom c-bg-dark py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 text-lg-left text-center mb-3 mb-lg-0">
                <span class="copyright">Copyright &copy; 2017-2018 Powered By <a href="#">NEAT CO LTD.</a>  All Rights Reserved.</span>
            </div>
            <div class="col-12 col-lg-4 text-lg-right text-center">
                <ul class="list-inline footer-social mb-0">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook pr-3"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter pr-3"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin pr-3"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-youtube-play pr-3"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest-p pr-3"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Footer Bottom -->

<!-- Top To Bottom-->
<div class="scrollup">
    <img src="{{ asset('images/up-arrow.svg') }}" class="img-fluid" />
</div>
<!-- End Top To Bottom-->

<!-- jQuery -->
<script src="{{ asset('js/plugins.min.js') }}"></script>
<script src="{{ asset('js/common.js') }}"></script>
<script src="{{ asset('toastr/toastr.min.js') }}"></script>
<script>
    $(window).load(function() {
        setTimeout(function () {
            $(".loader").fadeOut("slow");
        }, 250)
    });

    @if(session()->has('success'))
    toastr.success('{{session()->get("success")}}');
    @endif

    @if(session()->has('error'))
    toastr.error('{{session()->get("error") }}');
    @endif
</script>
@yield('footer_script')
</html>