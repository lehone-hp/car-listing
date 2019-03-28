@extends('layouts.admin')
@section('title')
    {{ $vehicle ? $vehicle->name : 'Vehicle Not Found' }}
@endsection

@section('header-style')
@endsection

@section('content')
    <h3 class="page-title">{{ $vehicle ? $vehicle->name : 'Vehicle Not Found' }}</h3>

    <!-- Content -->
    @if(!$vehicle)
        <div class="panel">
            <div class="panel-heading">
                <h3>Oops! The vehicle you are looking for does not exist</h3>
            </div>
        </div>
    @else

        <div class="row">
            <div class="col-md-8">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Uploaded pictures of Vehicle</h3>
                    </div>
                    <div class="panel-body">
                        @if($vehicle->photos->count() > 0)
                            <div class="owl-carousel owl-theme">
                                @foreach($vehicle->photos as $photo)
                                    <div class="photo-carousel">
                                        <img src="{{ asset($photo->photo) }}" class="img-thumbnail">
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <h3 class="mt-0">No photos have been uploaded for this vehicle</h3>
                        @endif
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Vehicle Details</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#description">Description</a></li>
                            <li>
                                <a data-toggle="tab" href="#specs">Specifications</a></li>
                            <li>
                                <a data-toggle="tab" href="#features">Features</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="description" class="tab-pane fade in active">
                                <p>{{ $vehicle->description }}</p>
                            </div>
                            <div id="specs" class="tab-pane fade">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <td><strong>Featured</strong></td>
                                            <td>{{ $vehicle->featured ? 'YES' : 'NO' }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Color</strong></td>
                                            <td>@if($vehicle->color)<span class="color-badge" style="background-color: {{$vehicle->color}}"></span>@else N/A @endif</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Engine Type</strong></td>
                                            <td>{{ $vehicle->engine_type ?: 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Engine Displacement</strong></td>
                                            <td>{{ $vehicle->engine_displacement ? $vehicle->engine_displacement.' CC' : 'N/A'}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Fuel Tank Capacity</strong></td>
                                            <td>{{ $vehicle->fuel_tank_capacity ? $vehicle->fuel_tank_capacity. 'Litre' : 'N/A'}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Driven</strong></td>
                                            <td>{{ $vehicle->driven ? $vehicle->driven.' KM' : 'N/A'}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Number of Doors</strong></td>
                                            <td>{{ $vehicle->door_count ?: 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Number of Cylinders</strong></td>
                                            <td>{{ $vehicle->cylinder_count ?: 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Number of Gears</strong></td>
                                            <td>{{ $vehicle->gear_count ?: 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Number of Seats</strong></td>
                                            <td>{{ $vehicle->seat_count ?: 'N/A' }}</td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                            <div id="features" class="tab-pane fade">
                                @if($vehicle->features->count() > 0)
                                    <div class="row">
                                        @foreach($vehicle->features->sortBy('name') as $feature)
                                            <div class="col-md-4">
                                                <h4><span class="lnr lnr-checkmark-circle"></span> {{ $feature->name }}</h4>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <h4>No Features allocated to this vehicle</h4>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel vehicle-show">
                    <div class="panel-heading">
                        <h3 class="panel-title">Basic Vehicle  Information</h3>
                    </div>
                    <div class="panel-body">
                        <h3 class="mt-0">{{ $vehicle->name }}</h3>
                        <h4><span>Price:</span> {{ $vehicle->price ? 'XAF '.number_format($vehicle->price, 2) : 'NEGOTIABLE'}} </h4>
                        <a href="{{ route('admin.vehicles.edit', ['id'=>$vehicle->slug]) }}" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger">Delete</button>
                        <hr>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <td><strong>Brand</strong></td>
                                    <td>{{ $vehicle->brand->name }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Model</strong></td>
                                    <td>{{ $vehicle->model }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Year</strong></td>
                                    <td>{{ $vehicle->make_year ?: 'N/A'}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Condition</strong></td>
                                    <td>{{ strtoupper($vehicle->condition) }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Transmission</strong></td>
                                    <td>{{ strtoupper($vehicle->transmission) }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Fuel Type</strong></td>
                                    <td>{{ $vehicle->fuelType->name }}</td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    @endif
@endsection

@section('footer_script')

@endsection()