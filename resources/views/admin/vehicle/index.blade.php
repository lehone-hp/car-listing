@extends('layouts.admin')
@section('title', 'Vehicles')

@section('content')
    <h3 class="page-title">All Vehicles</h3>

    <!-- Content -->
    @if ($vehicles->count() > 0)
        <div class="row vehicle-list">
            @foreach($vehicles as $vehicle)
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <!-- PANEL WITH FOOTER -->
                    <div class="panel">
                        <div class="panel-body no-padding">
                            @if($vehicle->photo)
                                <img src="{{ asset('storage/'.$vehicle->photo->photo) }}">
                            @else
                                <img src="{{ asset('admin/img/no-photo.png') }}">
                            @endif
                        </div>
                        <div class="panel-footer">
                            <h4 class="car-name">
                                <a href="{{ route('admin.vehicles.show', ['id'=>$vehicle->slug]) }}">{{ $vehicle->name }}</a></h4>
                            <h4><span>Price:</span> {{ $vehicle->price ? 'XAF '.$vehicle->price : 'NEGOTIABLE'}} </h4>
                        </div>
                    </div>
                    <!-- END PANEL WITH FOOTER -->
                </div>
            @endforeach
        </div>
        {{ $vehicles->links() }}
    @else
        <div class="panel">
            <div class="panel-heading">
                <h3>No Vehicles have been uploaded</h3>
                <h4>Visit <a href="{{ route('admin.vehicles.create') }}">Upload New Vehicle</a> to Upload a new Vehicle</h4>
            </div>
        </div>
    @endif
@endsection