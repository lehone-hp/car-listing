@extends('layouts.admin')
@section('title', 'Vehicles')

@section('content')
    <h3 class="page-title">List of Vehicles in the System</h3>

    <!-- Content -->
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Search Vehicles using the Filters below</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <form action="{{ route('admin.vehicles.index') }}" method="GET">
                        <div class="row">
                            <div class="form-group col-sm-8">
                                <input type="text" class="form-control"
                                       name="q" value="{{ $search['q'] ?: '' }}"
                                       placeholder="Search by name ...">
                            </div>
                            <div class="form-group col-sm-2">
                                <select class="form-control" name="brand">
                                    <option value="">--Select Vehicle Brand--</option>
                                    @foreach(\App\Brand::orderBy('name', 'ASC')->get() as $brand)
                                        <option value="{{ $brand->id }}" {{ $search['brand']==$brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-2">
                                <button class="btn btn-primary">Filter</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    @if ($vehicles->count() > 0)
                        <div class="row vehicle-list">
                            @foreach($vehicles as $vehicle)
                                <div class="col-xs-6 col-sm-4 col-md-3">
                                    <!-- PANEL WITH FOOTER -->
                                    <div class="panel">
                                        <div class="panel-body no-padding">
                                            @if($vehicle->photo)
                                                <img src="{{ asset($vehicle->photo->photo) }}">
                                            @else
                                                <img src="{{ asset('admin/img/no-photo.png') }}">
                                            @endif
                                        </div>
                                        <div class="panel-footer">
                                            <h4 class="car-name">
                                                <a href="{{ route('admin.vehicles.show', ['id'=>$vehicle->slug]) }}">{{ $vehicle->name }}</a></h4>
                                            <h4><span>Price:</span> {{ $vehicle->price ? 'XAF '.number_format($vehicle->price, 2) : 'NEGOTIABLE'}} </h4>
                                        </div>
                                    </div>
                                    <!-- END PANEL WITH FOOTER -->
                                </div>
                            @endforeach
                        </div>
                        {{ $vehicles->links() }}
                    @else
                        <h3>No Vehicles Found</h3>
                        <h4>Visit <a href="{{ route('admin.vehicles.create') }}">Upload New Vehicle</a> to Upload a new Vehicle or try another search query</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
