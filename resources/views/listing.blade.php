@extends('layouts.app')
@section('title', 'Search Quality Used Cars')
@section('loader')
    <div class="loader"></div>
@endsection
@section('content')

    <section>
        <div class="background-image-maker gradient gradient-lr"></div>
        <div class="holder-image">
            <img src="{{ asset('images/bg2.jpg') }}" alt="" class="img-fluid d-none" />
        </div>
        <div class="black-overlay overlay-full"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 justify-content-center text-center">
                    <h1 class="text-white c-font-weight-700">Quality Used Cars</h1>
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


    <!-- Grid Left Sidebar -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card c-brd-light car-box d-block d-lg-none mb-5">
                        <div class="card-body">
                            <form action="{{ route('listing') }}" method="GET">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <label class="c-dark">Budget (XAF)</label>
                                    <div class="form-group">
                                        <select class="form-control rounded" name="budget">
                                            <option value="">Select Budget</option>
                                            <option value="500000,2000000" {{ $search['budget_low'] == 500000 ? 'selected' : '' }}>500,000 - 2,000,000</option>
                                            <option value="2000000,10000000" {{ $search['budget_low'] == 2000000 ? 'selected' : '' }}>2,000,000 - 10,000,000</option>
                                            <option value="10000000,20000000" {{ $search['budget_low'] == 10000000 ? 'selected' : '' }}>10,000,000 - 20,000,000</option>
                                            <option value="20000000,50000000" {{ $search['budget_low'] == 20000000 ? 'selected' : '' }}>20,000,000 - 50,000,000</option>
                                            <option value="50000000,100000000" {{ $search['budget_low'] == 50000000 ? 'selected' : '' }}>50,000,000 - 100,000,000</option>
                                            <option value="1,1" {{ $search['budget_low'] == 1 ? 'selected' : '' }}>Above 100 M</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <label class="c-dark">Brand</label>
                                    <div class="form-group">
                                        <select class="form-control rounded" name="brand[]">
                                            <option value="">Select Brand</option>
                                            @foreach(\App\Brand::all() as $brand)
                                            <option value="{{ $brand->id }}" {{ in_array($brand->id, $search['brand']) ? 'selected' : '' }}>
                                                {{ $brand->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <label class="c-dark">Model</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control rounded" placeholder="Model Name"
                                               name="q" value="{{ $search['q'] ?: '' }}">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <label class="c-dark">Make Year</label>
                                    <div class="form-group">
                                        <select class="form-control rounded" name="year[]">
                                            <option value="">Select Make Year</option>
                                            @for ($i = 0; $i < 20; $i++)
                                            <option value="{{ \Carbon\Carbon::now()->year - $i }}" {{ in_array(\Carbon\Carbon::now()->year-$i, $search['year']) ? 'selected' : '' }}>
                                                {{ \Carbon\Carbon::now()->year - $i }} </option>
                                            @endfor
                                            <option value="0">below {{ \Carbon\Carbon::now()->year - 19 }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <label class="c-dark">Kilometers Driven</label>
                                    <div class="form-group">
                                        <select class="form-control rounded">
                                            <option value="">Select Distance Driven</option>
                                            @for($i=0; $i <= 90000; $i+=10000)
                                            <option value="{{$i}},{{$i+10000}}" {{ $search['driven_low'] >= $i && $search['driven_high'] <= $i+10000 ? 'selected' : '' }}>
                                                {{ $i==0?'below ':'' }}{{ number_format($i+10000) }} km</option>
                                            @endfor
                                            <option value="1,1"> above 100,000 km</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <label class="c-dark">Fuel Type</label>
                                    <div class="form-group">
                                        <select class="form-control rounded" name="fuel[]">
                                            <option value="">Select Fuel Type</option>
                                            @foreach(\App\FuelType::all() as $fuel)
                                            <option value="{{ $fuel->id }}" {{ in_array($fuel->id, $search['fuel']) ? 'selected' : '' }}>
                                                {{ $fuel->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <div class="form-group mb-0">
                                        <label class="c-dark">Transmission</label>
                                        <select class="form-control rounded" name="transmission[]">
                                            <option value="">Select Transmission</option>
                                            <option value="automatic" {{ in_array('automatic', $search['transmission']) ? 'selected' : '' }}>Automatic</option>
                                            <option value="manual" {{ in_array('manual', $search['transmission']) ? 'selected' : '' }}>Manual</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <label class="c-dark">Colors</label>
                                    <div class="form-group">
                                        <select class="form-control rounded" name="color">
                                            <option value="">Select Color</option>
                                            @foreach($colors as $index => $color)
                                            <option value="{{ $index }}" {{ $search['color'] == $index ? 'selected' : '' }}>{{ $colors[$index] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-2">
                                    <label class="mb-4"></label>
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-primary btn-md btn-block text-uppercase">Search</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <form action="{{ route('listing') }}" method="GET" id="listingFilterForm">
                    <div class="sidebar-widget d-none d-lg-block">
                        <div class="card c-brd-light border-top-0">
                            <div class="c-bg-light">
                                <div class="card-body p-3">
                                    <a href="#" class="d-block text-btn c-montserrat c-dark c-font-weight-500" data-toggle="collapse" data-target="#demo3">Budget</a>
                                </div>
                            </div>
                            <div id="demo3" class="collapse show widget-content">
                                <div class="card-body py-4 bg-white text-center">
                                    <div class="mt-3 budget">
                                        <input id="sl2" data-ui-slider="" type="text" value="" name="budget"
                                               data-slider-min="500000" data-slider-max="100000000"
                                               data-slider-value="[{{ $search['budget_low'] ?: '500000' }},{{ $search['budget_high'] ?: '100000000' }}]" class="slider">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card c-brd-light border-top-0">
                            <div class="c-bg-light">
                                <div class="card-body p-3">
                                    <a href="#" class="d-block text-btn c-montserrat c-dark c-font-weight-500" data-toggle="collapse" data-target="#demo4">Brand Or Model</a>
                                </div>
                            </div>
                            <div id="demo4" class="collapse show widget-content">
                                <div class="card-body py-4 bg-white">
                                    <div class="form-group position-relative">
                                        <input type="text" class="form-control" name="q" value="{{ $search['q'] ?: '' }}"
                                               placeholder="e.g. Mustang or Ford Mustang">
                                        <div class="search position-absolute">
                                            <a onclick="$('#listingFilterForm').submit();" href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    @foreach(\App\Brand::all() as $brand)

                                        <div class="form-group">
                                            <input type="checkbox" name="brand[]" {{ in_array($brand->id, $search['brand']) ? 'checked' : '' }}
                                                   value="{{ $brand->id }}" id="{{ 'brand_'.$brand->id }}">
                                            <label for="{{ 'brand_'.$brand->id }}" class="mb-0">{{ $brand->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card c-brd-light border-top-0">
                            <div class="c-bg-light">
                                <div class="card-body p-3">
                                    <a href="#" class="d-block text-btn c-montserrat c-dark c-font-weight-500" data-toggle="collapse" data-target="#demo5">Make Year</a>
                                </div>
                            </div>
                            <div id="demo5" class="collapse show widget-content">
                                <div class="card-body py-4 bg-white">
                                    <div class="row">
                                        @for ($i = 0; $i < 20; $i++)
                                            <div class="form-group col-4">
                                                <input type="checkbox" name="year[]"  {{ in_array(\Carbon\Carbon::now()->year-$i, $search['year']) ? 'checked' : '' }}
                                                       id="{{ 'year_'.(\Carbon\Carbon::now()->year - $i) }}"
                                                       value="{{ \Carbon\Carbon::now()->year - $i }}">
                                                <label for="{{ 'year_'.(\Carbon\Carbon::now()->year - $i) }}"
                                                       class="mb-0">{{ \Carbon\Carbon::now()->year - $i }}</label>
                                            </div>
                                        @endfor
                                            <div class="form-group col-4">
                                                <input type="checkbox" name="year[]" {{ in_array(0, $search['year']) ? 'checked' : '' }}
                                                       id="year_0" value="0">
                                                <label for="year_0" class="mb-0"> < {{ \Carbon\Carbon::now()->year - 19 }}</label>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card c-brd-light border-top-0">
                            <div class="c-bg-light">
                                <div class="card-body p-3">
                                    <a href="#" class="d-block text-btn c-montserrat c-dark c-font-weight-500" data-toggle="collapse" data-target="#demo6">Kilometers Driven</a>
                                </div>
                            </div>
                            <div id="demo6" class="collapse show widget-content">
                                <div class="card-body py-4 bg-white text-center">
                                    <div class="mt-3 driven">
                                        <input id="sl3" name="driven" data-ui-slider="" type="text" value=""
                                               data-slider-min="0" data-slider-max="8000"
                                               data-slider-value="[{{ $search['driven_low'] ?: '0' }},{{ $search['driven_high'] ?: '8000' }}]" class="slider">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card c-brd-light border-top-0">
                            <div class="c-bg-light">
                                <div class="card-body p-3">
                                    <a href="#" class="d-block text-btn c-montserrat c-dark c-font-weight-500" data-toggle="collapse" data-target="#demo7">Fuel Type</a>
                                </div>
                            </div>
                            <div id="demo7" class="collapse show widget-content">
                                <div class="card-body py-4 bg-white">
                                    @foreach(\App\FuelType::all() as $fuel)
                                    <div class="form-group">
                                        <input type="checkbox" name="fuel[]" {{ in_array($fuel->id, $search['fuel']) ? 'checked' : '' }}
                                               value="{{ $fuel->id }}" id="{{ 'fuel_'.$fuel->id }}">
                                        <label for="{{ 'fuel_'.$fuel->id }}" class="mb-0">{{ $fuel->name }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card c-brd-light border-top-0">
                            <div class="c-bg-light">
                                <div class="card-body p-3">
                                    <a href="#" class="d-block text-btn c-montserrat c-dark c-font-weight-500" data-toggle="collapse" data-target="#demo8">Transmission</a>
                                </div>
                            </div>
                            <div id="demo8" class="collapse show widget-content">
                                <div class="card-body py-4 bg-white">
                                    <div class="form-group">
                                        <input type="checkbox" value="automatic" {{ in_array('automatic', $search['transmission']) ? 'checked' : '' }}
                                               name="transmission[]" id="transmission_auth">
                                        <label for="transmission_auth" class="mb-0">Automatic</label>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="checkbox" value="manual" {{ in_array('manual', $search['transmission']) ? 'checked' : '' }}
                                        name="transmission[]" id="transmission_man">
                                        <label for="transmission_man" class="mb-0">Manual</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--
                        <div class="card c-brd-light border-top-0">
                            <div class="c-bg-light">
                                <div class="card-body p-3">
                                    <a href="#" class="d-block text-btn c-montserrat c-dark c-font-weight-500" data-toggle="collapse" data-target="#demo9">Color</a>
                                </div>
                            </div>
                            <div id="demo9" class="collapse show widget-content">
                                <div class="card-body py-4 bg-white text-center">
                                    <div class="widget-color">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item position-relative mb-2">
                                                <div class="form-group color1">
                                                    <input type="checkbox" id="color1">
                                                    <label for="color1" class="mb-0"></label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item position-relative mb-2">
                                                <div class="form-group color2">
                                                    <input type="checkbox" id="color2">
                                                    <label for="color2" class="mb-0"></label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item position-relative mb-2">
                                                <div class="form-group color3">
                                                    <input type="checkbox" id="color3">
                                                    <label for="color3" class="mb-0"></label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item position-relative mb-2">
                                                <div class="form-group color4">
                                                    <input type="checkbox" id="color4">
                                                    <label for="color4" class="mb-0"></label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item position-relative mb-2">
                                                <div class="form-group color5">
                                                    <input type="checkbox" id="color5">
                                                    <label for="color5" class="mb-0"></label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item position-relative mb-2">
                                                <div class="form-group color6">
                                                    <input type="checkbox" id="color6">
                                                    <label for="color6" class="mb-0"></label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item position-relative mb-2">
                                                <div class="form-group color7">
                                                    <input type="checkbox" id="color7">
                                                    <label for="color7" class="mb-0"></label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item position-relative mb-2">
                                                <div class="form-group color8">
                                                    <input type="checkbox" id="color8">
                                                    <label for="color8" class="mb-0"></label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item position-relative mb-2">
                                                <div class="form-group color9">
                                                    <input type="checkbox" id="color9">
                                                    <label for="color9" class="mb-0"></label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item position-relative mb-2">
                                                <div class="form-group color10">
                                                    <input type="checkbox" id="color10">
                                                    <label for="color10" class="mb-0"></label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item position-relative mb-2">
                                                <div class="form-group color11">
                                                    <input type="checkbox" id="color11">
                                                    <label for="color11" class="mb-0"></label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item position-relative mb-2">
                                                <div class="form-group color12">
                                                    <input type="checkbox" id="color12">
                                                    <label for="color12" class="mb-0"></label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item position-relative mb-2">
                                                <div class="form-group color13">
                                                    <input type="checkbox" id="color13">
                                                    <label for="color13" class="mb-0"></label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item position-relative mb-2">
                                                <div class="form-group color14">
                                                    <input type="checkbox" id="color14">
                                                    <label for="color14" class="mb-0"></label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        --}}
                    </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary btn-md btn-block text-uppercase">Search</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row mb-4">
                        <div class="col-12 col-md-5 col-xl-6 align-self-center">
                            <p class="mb-0">12 Vehicles Matching</p>
                        </div>
                        <div class="col-12 col-md-7 col-xl-6 text-right">
                            <div class="d-inline-block pr-md-3 mt-3 mt-md-0">
                                <div class="selector form-group mb-0 position-relative">
                                    <select class="form-control border-0 pl-4">
                                        <option> Price (High to Low) </option>
                                        <option> Price (Low to High) </option>
                                        <option> Kms (Low to High) </option>
                                        <option> Model (Newest to Oldest) </option>
                                    </select>
                                    <div class="filter position-absolute">
                                        <i class="fa fa-sliders c-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="d-inline-block mt-3 mt-md-0">
                                <div class="listing-filter">
                                    <ul class="nav nav-pills justify-content-md-end mb-0">
                                        <li class="nav-item mr-2">
                                            <a class="nav-link redial-light rounded" href="#"><i class="fa fa-th-list"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link redial-light rounded active" href="#"><i class="fa fa-th"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--============================================================
                    CAR LISTINGS
                    ==============================================================-->
                    <div class="row">
                        @foreach($vehicles as $vehicle)
                        <div class="col-12 col-md-6 col-lg-12 col-xl-6 mb-4 listings-slider-item">
                            <a href="{{ route('single', ['slug'=>$vehicle->slug]) }}">
                                <img src="{{ asset($vehicle->photo->photo) }}" alt="{{ $vehicle->name }}" class="w-100 img-fluid rounded-top" /></a>
                            <div class="card c-brd-light car-box">
                                <div class="card-body">
                                    <h6 class="mb-2"><a href="{{ route('single', ['slug'=>$vehicle->slug]) }}">{{ $vehicle->name }}</a></h6>
                                    <ul class="list-unstyled mb-0 c-line-height-2_5">
                                        <li><h6 class="c-primary mb-0">
                                                <small class="c-light">Price</small> {{ $vehicle->price ? 'XAF '.number_format($vehicle->price) : 'Negotiable' }}
                                                @if ($vehicle->old_price)
                                                    <small><del class="d-inline-block">XAF {{ number_format($vehicle->old_price) }}</del></small>
                                                @endif
                                            </h6></li>
                                    </ul>
                                </div>
                                <ul class="list-inline mb-0 p-3 c-brd-light border border-left-0 border-bottom-0 border-right-0">
                                    <li class="list-inline-item mr-3"><i class="flaticon-calendar pr-1"></i> {{ $vehicle->make_year }}</li>
                                    <li class="list-inline-item mr-3"><i class="flaticon-clock pr-1"></i> {{ number_format($vehicle->driven)  }}</li>
                                    <li class="list-inline-item mr-3"><i class="flaticon-fuel pr-1"></i>  {{ ucfirst($vehicle->fuelType->name) }}</li>
                                    <li class="list-inline-item"><i class="flaticon-transport-2 pr-1"></i>  {{ ucfirst($vehicle->transmission) }} </li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 col-sm-12">
                            {{ $vehicles->appends(['budget'=>$search['budget_low'] ? $search['budget_low'].','.$search['budget_high'] : '',
                                'brand'=>$search['brand'], 'q'=>$search['q'], 'fuel'=>$search['fuel'],
                                'driven'=>$search['driven_low'] ? $search['driven_low'].','.$search['driven_high'] : '',
                                'transmission'=>$search['transmission'], 'year'=>$search['year']])->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Grid Left Sidebar -->


@endsection
@section('footer_script')
    <script>
        $(function () {

        });
    </script>
@endsection('footer_script')