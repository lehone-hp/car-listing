@extends('layouts.app')

@section('content')

    <section>
        <div class="background-image-maker gradient gradient-lr"></div>
        <div class="holder-image">
            <img src="images/bg2.jpg" alt="" class="img-fluid d-none" />
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
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <label class="c-dark">Select City</label>
                                    <div class="form-group">
                                        <select class="form-control rounded">
                                            <option value="">--- Select City ---</option>
                                            <option value="New Delhi">New Delhi</option>
                                            <option value="Bangalore">Bangalore</option>
                                            <option value="Mumbai">Mumbai</option>
                                            <option value="Hyderabad">Hyderabad</option>
                                            <option value="Chennai">Chennai</option>
                                            <option value="Jaipur">Jaipur</option>
                                            <option value="Pune">Pune</option>
                                            <option value="Kolkata">Kolkata</option>
                                            <option value="Gurgaon">Gurgaon</option>
                                            <option value="Ahmedabad">Ahmedabad</option>
                                            <option value="Noida">Noida</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Indore">Indore</option>
                                            <option value="Kochi">Kochi</option>
                                            <option value="" disabled="">--------------------</option>
                                            <option value="Agra">Agra</option>
                                            <option value="Ahmedabad">Ahmedabad</option>
                                            <option value="Ajmer">Ajmer</option>
                                            <option value="Akola">Akola</option>
                                            <option value="Alibag">Alibag</option>
                                            <option value="Aligarh">Aligarh</option>
                                            <option value="Allahabad">Allahabad</option>
                                            <option value="Alwar">Alwar</option>
                                            <option value="Amalapuram">Amalapuram</option>
                                            <option value="Ambala">Ambala</option>
                                            <option value="Ambernath">Ambernath</option>
                                            <option value="Ambikapur">Ambikapur</option>
                                            <option value="Amethi">Amethi</option>
                                            <option value="Amravati">Amravati</option>
                                            <option value="Amreli">Amreli</option>
                                            <option value="Amritsar">Amritsar</option>
                                            <option value="Amroha">Amroha</option>
                                            <option value="Anantapur">Anantapur</option>
                                            <option value="Aurangabad(bh)">Aurangabad(bh)</option>
                                            <option value="Avadi">Avadi</option>
                                            <option value="Azamgarh">Azamgarh</option>
                                            <option value="Baddi">Baddi</option>
                                            <option value="Badlapur">Badlapur</option>
                                            <option value="Baran">Baran</option>
                                            <option value="Barasat">Barasat</option>
                                            <option value="Baraut">Baraut</option>
                                            <option value="Bardhaman">Bardhaman</option>
                                            <option value="Bardoli">Bardoli</option>
                                            <option value="Bareilly">Bareilly</option>
                                            <option value="Bargarh">Bargarh</option>
                                            <option value="Baripada">Baripada</option>
                                            <option value="Barmer">Barmer</option>
                                            <option value="Barnala">Barnala</option>
                                            <option value="Barpeta">Barpeta</option>
                                            <option value="Barrackpore">Barrackpore</option>
                                            <option value="Barsar">Barsar</option>
                                            <option value="Barshi">Barshi</option>
                                            <option value="Baruipur">Baruipur</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <label class="c-dark">Body Type</label>
                                    <div class="form-group">
                                        <select class="form-control rounded">
                                            <option value="Sedan">Sedan</option>
                                            <option value="Hatchback">Hatchback</option>
                                            <option value="SUV">SUV</option>
                                            <option value="Minivan">Minivan</option>
                                            <option value="Pickup">Pickup</option>
                                            <option value="Coupe Car">Coupe Car</option>
                                            <option value="Convertible">Convertible</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <label class="c-dark">Budget ($)</label>
                                    <div class="form-group">
                                        <select class="form-control rounded">
                                            <option value="20,000 - 1,00,000">20,000 - 1,00,000</option>
                                            <option value="5,00,000 - 10,00,000">5,00,000 - 10,00,000</option>
                                            <option value="10,00,000 - 20,00,000">10,00,000 - 20,00,000</option>
                                            <option value="20,00,000 - 50,00,000">20,00,000 - 50,00,000</option>
                                            <option value="50,00,000 - 100,00,000">50,00,000 - 100,00,000</option>
                                            <option value="above-1-crore">Above 1 Crore</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <label class="c-dark">Brand</label>
                                    <div class="form-group">
                                        <select class="form-control rounded">
                                            <option value="Ford">Ford </option>
                                            <option value="Volvo">Volvo</option>
                                            <option value="BMW">BMW</option>
                                            <option value="Aston">Aston</option>
                                            <option value="Chevrolet">Chevrolet</option>
                                            <option value="Honda">Honda City i VTEC SV</option>
                                            <option value="Volkswagen">Volkswagen</option>
                                            <option value="Tata">Tata</option>.
                                            <option value="Skoda">Skoda</option>
                                            <option value="Audi">Audi</option>
                                            <option value="Ranault">Ranault</option>
                                            <option value="Nissan">Nissan</option>
                                            <option value="Mahindra">Mahindra</option>
                                            <option value="Toyota">Toyota</option>
                                            <option value="Maruti">Maruti</option>
                                            <option value="Hyundai">Hyundai</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <label class="c-dark">Model</label>
                                    <div class="form-group">
                                        <select class="form-control rounded">
                                            <option value="Ford Mustang">Mustang </option>
                                            <option value="Volvo XC90 Inscription">Volvo XC90 Inscription</option>
                                            <option value="BMW X6 M">BMW X6 M</option>
                                            <option value="Aston Martin DB5">Aston Martin DB5</option>
                                            <option value="Chevrolet Camaro">Chevrolet Camaro</option>
                                            <option value="Honda City i VTEC SV">Honda City i VTEC SV</option>
                                            <option value="Volkswagen Jetta">Volkswagen Jetta</option>
                                            <option value="Tata Aria Pure 4x2">Tata Aria Pure 4x2</option>.
                                            <option value="Skoda Octavia Ambition 1.4 TSI MT">Skoda Octavia Ambition 1.4 TSI MT</option>
                                            <option value="Audi A4 35 TDI Premium">Audi A4 35 TDI Premium</option>
                                            <option value="Renault Fluence E4 D">Renault Fluence E4 D</option>
                                            <option value="Nissan Micra AT">Nissan Micra AT</option>
                                            <option value="Mahindra Scorpio S10 AT 2WD">Mahindra Scorpio S10 AT 2WD</option>
                                            <option value="Toyota Etios G">Toyota Etios G</option>
                                            <option value="Maruti Swift ZXI">Maruti Swift ZXI</option>
                                            <option value="Hyundai I20">Hyundai I20</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <label class="c-dark">Make Year</label>
                                    <div class="form-group">
                                        <select class="form-control rounded">
                                            <option value="2016">2016 </option>
                                            <option value="2015">2015 </option>
                                            <option value="2014">2014 </option>
                                            <option value="2013">2013 </option>
                                            <option value="2012">2012 </option>
                                            <option value="2011">2011 </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <label class="c-dark">Killometers Driven</label>
                                    <div class="form-group">
                                        <select class="form-control rounded">
                                            <option value="50,000 km">50,000 km</option>
                                            <option value="20,000 km">20,000 km</option>
                                            <option value="15,000 km">15,000 km</option>
                                            <option value="60,000 km">60,000 km</option>
                                            <option value="70,000 km">70,000 km</option>
                                            <option value="30,000 km">30,000 km</option>
                                            <option value="80,000 km">80,000 km</option>
                                            <option value="90,000 km">90,000 km</option>
                                            <option value="100,000 km">100,000 km</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <label class="c-dark">Fuel Type</label>
                                    <div class="form-group">
                                        <select class="form-control rounded">
                                            <option value="Petrol">Petrol</option>
                                            <option value="Diesal">Diesal</option>
                                            <option value="CNG">CNG</option>
                                            <option value="Electric">Electric</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <label class="c-dark">Transmission</label>
                                    <div class="form-group">
                                        <select class="form-control rounded">
                                            <option value="Automatic">Automatic</option>
                                            <option value="Manual">Manual</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-xl-2">
                                    <label class="c-dark">Colors</label>
                                    <div class="form-group">
                                        <select class="form-control rounded">
                                            <option value="Gray">Gray</option>
                                            <option value="White">White</option>
                                            <option value="Blue">Blue</option>
                                            <option value="Green">Green</option>
                                            <option value="Black">Black</option>
                                            <option value="Pink">Pink</option>
                                            <option value="Red">Red</option>
                                            <option value="Yellow">Yellow</option>
                                            <option value="More Colors">More Colors</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-2">
                                    <label class="mb-4"></label>
                                    <div class="form-group mb-0">
                                        <a href="#" class="btn btn-primary btn-md btn-block text-uppercase">Search</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="sidebar-widget d-none d-lg-block">

                        <div class="card c-brd-light border-top-0">
                            <div class="c-bg-light">
                                <div class="card-body p-3">
                                    <a href="#" class="d-block text-btn c-montserrat c-dark c-font-weight-500" data-toggle="collapse" data-target="#demo3">Budget</a>
                                </div>
                            </div>
                            <div id="demo3" class="collapse show widget-content">
                                <div class="card-body py-4 bg-white text-center">
                                    <div class="mt-3">
                                        <input id="sl2" data-ui-slider="" type="text" value="" data-slider-min="20000" data-slider-max="100000"  data-slider-value="[20000,100000]" class="slider">
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
                                        <input type="text" class="form-control" placeholder="e.g. Mustang or Ford Mustang">
                                        <div class="search position-absolute">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox1">
                                        <label for="checkbox1" class="mb-0">Volvo XC90 Inscription</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox2">
                                        <label for="checkbox2" class="mb-0">BMW X6 M</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox3">
                                        <label for="checkbox3" class="mb-0">Aston Martin DB5</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox4">
                                        <label for="checkbox4" class="mb-0">Chevrolet Camaro</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox5">
                                        <label for="checkbox5" class="mb-0">Chevrolet Camaro SS</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox6">
                                        <label for="checkbox6" class="mb-0">Chevrolet Corvette C7</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox7">
                                        <label for="checkbox7" class="mb-0">Ford F-150 Raptor Tune</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox8">
                                        <label for="checkbox8" class="mb-0">Ford Mustang</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox9">
                                        <label for="checkbox9" class="mb-0">Ford Vignale Mondeo Turnier</label>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="checkbox" id="checkbox10">
                                        <label for="checkbox10" class="mb-0">Honda Acura NSXn</label>
                                    </div>
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
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox11">
                                        <label for="checkbox11" class="mb-0">2016</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox12">
                                        <label for="checkbox12" class="mb-0">2015</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox13">
                                        <label for="checkbox13" class="mb-0">2014</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox14">
                                        <label for="checkbox14" class="mb-0">2013</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox15">
                                        <label for="checkbox15" class="mb-0">2012</label>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="checkbox" id="checkbox16">
                                        <label for="checkbox16" class="mb-0">2011</label>
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
                                        <input id="sl3" data-ui-slider="" type="text" value="" data-slider-min="5000" data-slider-max="8000"  data-slider-value="[5000,8000]" class="slider">
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
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox17">
                                        <label for="checkbox17" class="mb-0">petrol</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox18">
                                        <label for="checkbox18" class="mb-0">Diesel</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="checkbox19">
                                        <label for="checkbox19" class="mb-0">CNG</label>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="checkbox" id="checkbox20">
                                        <label for="checkbox20" class="mb-0">Electric</label>
                                    </div>
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
                                        <input type="checkbox" id="checkbox21">
                                        <label for="checkbox21" class="mb-0">Automatic</label>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="checkbox" id="checkbox22">
                                        <label for="checkbox22" class="mb-0">Manual</label>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    </div>
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
                                    <h6 class="mb-2"><a href="{{ route('single', ['slug'=>'aa']) }}">{{ $vehicle->name }}</a></h6>
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
                            <ul class="pagination mb-0 text-center text-uppercase justify-content-center">
                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left pr-1"></i> Prev</a></li>
                                <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">1</a></li>
                                <li class="page-item d-none d-sm-inline-block active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"> Next <i class="fa fa-angle-right pl-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Grid Left Sidebar -->


@endsection