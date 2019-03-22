@extends('layouts.app')
@section('title', $vehicle->name)
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
                    <h1 class="text-white c-font-weight-700">Single Cars Listing</h1>
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
                        <li class="breadcrumb-item active">Car Listing</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcrumb -->

    <!-- List Details -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mb-4 mb-lg-0">
                    <div class="car-listing">
                        <div class="flexslider c-bg-dark mb-4">
                            <ul class="slides">
                                @foreach($vehicle->photos as $photo)
                                <li class="position-relative"  data-thumb="{{ asset($photo->photo) }}">
                                    <img src="{{ asset($photo->photo) }}" alt="" class="w-100 img-fluid" />
                                    <div class="fullscreen position-absolute text-center">
                                        <a href="{{ asset($photo->photo) }}" class="btn-gallery c-primary"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="c-bg-dark rounded-top">
                            <ul class="nav nav-tabs border-0 flex-column flex-sm-row text-white" id="myTab" role="tablist">
                                <li class="nav-item mb-0 rounded-left">
                                    <a class="nav-link redial-light border-0 py-3 active" data-toggle="tab" href="#overview" role="tab" aria-expanded="true">Overview</a>
                                </li>
                                <li class="nav-item mb-0">
                                    <a class="nav-link redial-light rounded-0 border-0 py-3" data-toggle="tab" href="#specifications" role="tab" aria-expanded="false">Specifications</a>
                                </li>
                                <li class="nav-item mb-0">
                                    <a class="nav-link redial-light rounded-0 border-0 py-3" data-toggle="tab" href="#features" role="tab" aria-expanded="false">Features</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade active show" id="overview" role="tabpanel" aria-expanded="true">
                                <div class="border c-brd-light border-top-0">
                                    <div class="card-body pt-5">
                                        <p>{{ $vehicle->description }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="specifications" role="tabpanel" aria-expanded="false">
                                <div class="border c-brd-light border-top-0">
                                    <div id="engine" class="collapse show widget-content">
                                        <table class="table table-striped mb-0">
                                            <tbody>
                                            @if($vehicle->engine_type)
                                            <tr>
                                                <td>Engine Type</td>
                                                <td>{{ $vehicle->engine_type }}</td>
                                            </tr>
                                            @endif
                                            @if($vehicle->engine_displacement)
                                                <tr>
                                                <td>Displacement</td>
                                                <td>{{ $vehicle->engine_displacement }}</td>
                                            </tr>
                                            @endif
                                            @if($vehicle->fuel_tank_capacity)
                                            <tr>
                                                <td>Fuel Tank Capacity</td>
                                                <td>{{ $vehicle->fuel_tank_capacity.' Litre' }}</td>
                                            </tr>
                                            @endif
                                            @if($vehicle->door_count)
                                            <tr>
                                                <td>Number of Doors</td>
                                                <td>{{ $vehicle->door_count }}</td>
                                            </tr>
                                            @endif
                                            @if($vehicle->cylinder_count)
                                            <tr>
                                                <td>Number of Cylinders</td>
                                                <td>{{ $vehicle->cylinder_count }}</td>
                                            </tr>
                                            @endif
                                            @if($vehicle->gear_count)
                                            <tr>
                                                <td>Number of Gears</td>
                                                <td>{{ $vehicle->gear_count }}</td>
                                            </tr>
                                            @endif
                                            @if($vehicle->seat_count)
                                            <tr>
                                                <td>Number of Seats</td>
                                                <td>{{ $vehicle->seat_count }}</td>
                                            </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="features" role="tabpanel" aria-expanded="false">
                                <div class="border c-brd-light border-top-0">
                                    <div class="card-body pt-4">
                                        <div class="row">
                                            @foreach($vehicle->features->sortBy('name') as $feature)
                                            <div class="col-12 col-sm-6">
                                                <i class="fa fa-check c-primary pr-2"></i> {{ $feature->name }}
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card c-brd-light mb-4">
                        <div class="card-body">
                            <h4>{{ $vehicle->name }}</h4>
                            <ul class="list-unstyled c-line-height-2_5 mb-0">
                                <li><small class="c-light">Price</small> <h4 class="d-inline-block c-primary mb-1"> {{ $vehicle->price ? 'XAF '.number_format($vehicle->price) : 'Negotiable' }} </h4></li>
                            </ul>
                        </div>
                        <table class="table mb-0 c-line-height-1_5 c-brd-light">
                            <tbody>
                            <tr>
                                <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-transport-7 pr-1"></i> Model:</td>
                                <td>{{ ucwords($vehicle->model) }}</td>
                            </tr>
                            <tr>
                                <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-calendar pr-1"></i> Make Year:</td>
                                <td>{{ $vehicle->make_year }}</td>
                            </tr>
                            <tr>
                                <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-fuel pr-1"></i> Fuel:</td>
                                <td>{{ ucfirst($vehicle->fuelType->name) }}</td>
                            </tr>
                            <tr>
                                <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-transport-2 pr-1"></i> Transmission:</td>
                                <td>{{ ucfirst($vehicle->transmission) }}</td>
                            </tr>
                            <tr>
                                <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-ammunition pr-1"></i> Color:</td>
                                <td><span style="height: 20px;width: 70px;display: block;background-color: {{ $vehicle->color }}"></span></td>
                            </tr>
                            <tr>
                                <td class="c-dark c-font-weight-600 b-r"><i class="flaticon-clock pr-1"></i> Driven:</td>
                                <td>{{ number_format($vehicle->driven).' km' }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card c-brd-light mb-4">
                        <div class="c-bg-light">
                            <div class="card-body p-3">
                                <h6 class="mb-0">Contact Seller</h6>
                            </div>
                        </div>
                        <div class="card-body py-4 bg-white">
                            <form action="{{ route('contact.seller', ['slug'=>$vehicle->slug]) }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <input type="text" name="name"
                                           value="{{ old('name') }}"
                                           class="form-control {{ $errors->has('name') ? 'border-danger' : '' }}"
                                           placeholder="Name *"/>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">
                                            {{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email"
                                           value="{{ old('email') }}"
                                           class="form-control {{ $errors->has('email') ? 'border-danger' : '' }}"
                                           placeholder="Email *" />
                                    @if ($errors->has('email'))
                                        <span class="text-danger">
                                            {{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone"
                                           value="{{ old('phone') }}"
                                           class="form-control {{ $errors->has('phone') ? 'border-danger' : '' }}"
                                           placeholder="Phone *" />
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">
                                            {{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <textarea name="message"
                                              class="form-control {{ $errors->has('message') ? 'border-danger' : '' }}"
                                              placeholder="Message *">{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">
                                            {{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg text-uppercase"> Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End List Details -->

    <!-- Car Featured-->
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-7">
                    <h3>Related Cars</h3>
                    <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                </div>
            </div>
            <div class="slider multiple-items2">
                <div>
                    <a href="#"><img src="/images/img5.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="#">Aston Martin DB5</a></h6>
                            <ul class="list-unstyled mb-0 c-line-height-2_5">
                                <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> $28,600 </h6></li>
                                <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                            </ul>
                        </div>
                        <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                            <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <a href="#"><img src="/images/img6.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="#">Chevrolet camaro SS</a></h6>
                            <ul class="list-unstyled mb-0 c-line-height-2_5">
                                <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> $35,800 </h6></li>
                                <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                            </ul>
                        </div>
                        <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                            <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <a href="#"><img src="/images/img7.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="#">Land Rover Discovery XXV</a></h6>
                            <ul class="list-unstyled mb-0 c-line-height-2_5">
                                <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> $41,300 </h6></li>
                                <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                            </ul>
                        </div>
                        <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                            <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <a href="#"><img src="/images/img5.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="#">Aston Martin DB5</a></h6>
                            <ul class="list-unstyled mb-0 c-line-height-2_5">
                                <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> $28,600 </h6></li>
                                <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                            </ul>
                        </div>
                        <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                            <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <a href="#"><img src="/images/img6.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="#">Chevrolet camaro SS</a></h6>
                            <ul class="list-unstyled mb-0 c-line-height-2_5">
                                <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> $35,800 </h6></li>
                                <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                            </ul>
                        </div>
                        <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                            <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <a href="#"><img src="/images/img7.jpg" alt="" class="img-fluid rounded-top" /></a>
                    <div class="card c-brd-light car-box">
                        <div class="card-body">
                            <h6 class="mb-2"><a href="#">Land Rover Discovery XXV</a></h6>
                            <ul class="list-unstyled mb-0 c-line-height-2_5">
                                <li><h6 class="c-primary mb-0"><small class="c-light">Price</small> $41,300 </h6></li>
                                <li><i class="fa fa-map-marker pr-1"></i> South City, New York</li>
                            </ul>
                        </div>
                        <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-calendar pr-1"></i> 2015 </a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-clock pr-1"></i> 35,000</a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="c-light"><i class="flaticon-fuel pr-1"></i>  Petrol </a></li>
                            <li class="list-inline-item"><a href="#" class="c-light"><i class="flaticon-transport-2 pr-1"></i>  Auto </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Car Featured-->
@endsection