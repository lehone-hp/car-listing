@extends('layouts.app')
@section('title', 'Contact Us')
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
                    <h1 class="text-white c-font-weight-700">Contact Us</h1>
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
                        <li class="breadcrumb-item active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcrumb -->

    <!-- Contact -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 pb-3">
                    <h3>Get In Touch</h3>
                    <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-3 mb-4 mb-lg-0">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-12 mb-3">
                            <div class="media">
                                <div class="d-flex mr-3">
                                    <span class="lnr lnr-map h2"></span>
                                </div>
                                <div class="media-body">
                                    <h5 class="c-primary mb-2">HQ Address</h5>
                                    <p>{{ settings('contact_address', 'NEAT Building - Between Presbook & BICEC, Ahidjo Street - Bown Beach - Limbe') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12 mb-3">
                            <div class="media">
                                <div class="d-flex mr-3">
                                    <span class="lnr lnr-phone-handset h2"></span>
                                </div>
                                <div class="media-body">
                                    <h5 class="c-primary mb-2">Phone</h5>
                                    <p><a href="tel:{{ settings('contact_phone', '237 233 33 21 50') }}" class="c-light"> {{ settings('contact_phone', '237 233 33 21 50') }}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12 mb-0 mb-lg-3">
                            <div class="media">
                                <div class="d-flex mr-3">
                                    <span class="lnr lnr-printer h2"></span>
                                </div>
                                <div class="media-body">
                                    <h5 class="c-primary mb-2">Fax</h5>
                                    <p><a href="tel:{{ settings('contact_fax', '237 233 33 21 50') }}" class="c-light"> {{ settings('contact_fax', '237 233 33 33 27 45') }}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="media">
                                <div class="d-flex mr-3">
                                    <span class="lnr lnr-envelope h2"></span>
                                </div>
                                <div class="media-body">
                                    <h5 class="c-primary mb-2">Email</h5>
                                    <p><a href="mailto:{{ settings('contact_email', 'neatlimbe@camnet.cm') }}" class="c-light"> {{ settings('contact_email', 'neatlimbe@camnet.cm') }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 ml-auto">
                    <div class="heading pb-3">
                        <h6 class="mb-0">Send Us Message</h6>
                        <hr class="c-brd-primary w-25 mx-0">
                    </div>
                    <form action="{{ route('contact') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="c-dark">Full Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}"
                                           class="form-control {{ $errors->has('name') ? 'border-danger' : '' }}"
                                           placeholder="John Doe" />
                                    @if($errors->has('name'))
                                        <span class="text-danger">
                                        {{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="c-dark">Email address</label>
                                    <input type="text" name="email" value="{{ old('email') }}"
                                           class="form-control {{ $errors->has('email') ? 'border-danger' : '' }}"
                                           placeholder="demo@domain.com" />
                                    @if($errors->has('email'))
                                        <span class="text-danger">
                                        {{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label class="c-dark">Message</label>
                                    <textarea class="form-control {{ $errors->has('message') ? 'border-danger' : '' }}"
                                              name="message"
                                              placeholder="Enter your text here...">{{ old('message') }}</textarea>
                                    @if($errors->has('message'))
                                        <span class="text-danger">
                                        {{ $errors->first('message') }}</span>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary text-uppercase btn-lg">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

@endsection
