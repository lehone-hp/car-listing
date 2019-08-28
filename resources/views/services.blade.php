@extends('layouts.app')
@section('title', 'Our Services')
@section('content')

    <!-- Page Inner-->
    <section>
        <div class="background-image-maker gradient gradient-lr"></div>
        <div class="holder-image">
            <img src="{{ asset('images//bg2.jpg') }}" alt="" class="img-fluid d-none" />
        </div>
        <div class="black-overlay overlay-full"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 justify-content-center text-center">
                    <h1 class="text-white c-font-weight-700">Our Services</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Inner-->

    <!-- Breadcrumb -->
    <section class="py-0 h-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-5 col-lg-3 text-center">
                    <ol class="breadcrumb justify-content-center mb-0 c-bg-primary text-white py-3 position-relative">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Services</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcrumb -->

    <!-- Features -->
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 pb-3">
                    <h3>Our Great Services</h3>
                    <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-5">
                    <div class="service">
                        <a href="#"><img src="{{ asset('images//service1.jpg') }}" alt="" class="img-fluid" /></a>
                        <div class="service-content pt-4">
                            <h6 class="mb-2 text-uppercase">Highly Secured</h6>
                            <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien venenatis faucibus.</p>
                            <a href="#" class="c-primary"><i class="fa fa-angle-double-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-5">
                    <div class="service">
                        <a href="#"><img src="{{ asset('images//service2.jpg') }}" alt="" class="img-fluid" /></a>
                        <div class="service-content pt-4">
                            <h6 class="mb-2 text-uppercase">Highly Secured</h6>
                            <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien venenatis faucibus.</p>
                            <a href="#" class="c-primary"><i class="fa fa-angle-double-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-5">
                    <div class="service">
                        <a href="#"><img src="{{ asset('images//service3.jpg') }}" alt="" class="img-fluid" /></a>
                        <div class="service-content pt-4">
                            <h6 class="mb-2 text-uppercase">Highly Secured</h6>
                            <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien venenatis faucibus.</p>
                            <a href="#" class="c-primary"><i class="fa fa-angle-double-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="service">
                        <a href="#"><img src="{{ asset('images//service4.jpg') }}" alt="" class="img-fluid" /></a>
                        <div class="service-content pt-4">
                            <h6 class="mb-2 text-uppercase">Highly Secured</h6>
                            <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien venenatis faucibus.</p>
                            <a href="#" class="c-primary"><i class="fa fa-angle-double-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-5 mb-md-0">
                    <div class="service">
                        <a href="#"><img src="{{ asset('images//service5.jpg') }}" alt="" class="img-fluid" /></a>
                        <div class="service-content pt-4">
                            <h6 class="mb-2 text-uppercase">Highly Secured</h6>
                            <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien venenatis faucibus.</p>
                            <a href="#" class="c-primary"><i class="fa fa-angle-double-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service">
                        <a href="#"><img src="{{ asset('images//service6.jpg') }}" alt="" class="img-fluid" /></a>
                        <div class="service-content pt-4">
                            <h6 class="mb-2 text-uppercase">Highly Secured</h6>
                            <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien venenatis faucibus.</p>
                            <a href="#" class="c-primary"><i class="fa fa-angle-double-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features -->

    <!-- Work -->
    <section class="image-bg">
        <div class="background-image-maker"></div>
        <div class="holder-image">
            <img src="{{ asset('images//bg3.jpg') }}" alt="" class="img-fluid d-none" />
        </div>
        <div class="black-overlay black1"></div>
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-12 col-lg-6 pb-3">
                    <h3 class="text-white">How We Works</h3>
                    <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="process text-center">
                        <div class="block rounded-circle mx-auto c-bg-primary h1 mb-4 text-white c-line-height-2_5 c-font-weight-300 block-arrow position-relative brd-primary">
                            01
                        </div>
                        <h6 class="text-white mb-2">First Process Step</h6>
                        Nullam accumsan lorem in dui cras ultricies mi eu turpis hendrerit.
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="process text-center">
                        <div class="block rounded-circle mx-auto c-bg-light-blue h1 mb-4 text-white c-line-height-2_5 c-font-weight-300 block-arrow2 position-relative brd-primary">
                            02
                        </div>
                        <h6 class="text-white mb-2">Second Process Step</h6>
                        Nullam accumsan lorem in dui cras ultricies mi eu turpis hendrerit.
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-sm-0">
                    <div class="process text-center">
                        <div class="block rounded-circle mx-auto c-bg-pink h1 mb-4 text-white c-line-height-2_5 c-font-weight-300 block-arrow3 position-relative brd-primary">
                            03
                        </div>
                        <h6 class="text-white mb-2">Third Process Step</h6>
                        Nullam accumsan lorem in dui cras ultricies mi eu turpis hendrerit.
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="process text-center">
                        <div class="block rounded-circle mx-auto c-bg-green h1 mb-4 text-white c-line-height-2_5 c-font-weight-300 block-arrow4 position-relative brd-primary">
                            04
                        </div>
                        <h6 class="text-white mb-2">Process Complete</h6>
                        Nullam accumsan lorem in dui cras ultricies mi eu turpis hendrerit.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Work -->


    @include('layouts.advantages')

@endsection