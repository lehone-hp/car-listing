@extends('layouts.app')
@section('title', 'About Us')
@section('content')

    <!-- Page Inner-->
    <section>
        <div class="background-image-maker gradient gradient-lr"></div>
        <div class="holder-image">
            <img src="{{ asset('images/bg2.jpg') }}" alt="" class="img-fluid d-none" />
        </div>
        <div class="black-overlay overlay-full"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 justify-content-center text-center">
                    <h1 class="text-white c-font-weight-700">About Us</h1>
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
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcrumb -->

    <!-- About Us -->
    <section class="image-bg">
        <div class="right-block col-12 col-lg-5 position-absolute  mb-5 mb-lg-0">
            <div class="background-image-maker bg-transparent"></div>
            <div class="holder-image">
                <img src="{{ asset('images/car3.png') }}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h3>About CarSpot</h3>
                    <p class="lead c-primary c-font-weight-400 font-italic">In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                    <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                    <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->

    <!-- Features -->
    <section class="bg-light">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-12 col-lg-6 pb-4">
                    <h3>Why to Choose CarSpot</h3>
                    <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                    <div class="card border-white feature text-center">
                        <div class="card-body p-5">
                            <div class="feature-icon border rounded-circle mx-auto c-brd-light h2 mb-4">
                                <span class="lnr lnr-leaf"></span>
                            </div>
                            <h6 class="text-uppercase mb-3">Highly Secured</h6>
                            Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                    <div class="card border-white feature text-center">
                        <div class="card-body p-5">
                            <div class="feature-icon border rounded-circle mx-auto c-brd-light h2 mb-4">
                                <span class="lnr lnr-magic-wand"></span>
                            </div>
                            <h6 class="text-uppercase mb-3">Get An Offer</h6>
                            Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card border-white feature text-center">
                        <div class="card-body p-5">
                            <div class="feature-icon border rounded-circle mx-auto c-brd-light h2 mb-4">
                                <span class="lnr lnr-thumbs-up"></span>
                            </div>
                            <h6 class="text-uppercase mb-3">Trusted Agents</h6>
                            Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features -->


    @include('layouts.testimonials')

    @include('layouts.advantages')

@endsection