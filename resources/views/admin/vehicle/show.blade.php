@extends('layouts.admin')
@section('title')
    {{ $vehicle ? $vehicle->name : 'Vehicle Not Found' }}
@endsection

@section('content')
    <h3 class="page-title">{{ $vehicle ? $vehicle->name : 'Vehicle Not Found' }}</h3>

    <!-- Content -->
    @if($vehicle)
    @else
        <div class="panel">
            <div class="panel-heading">
                <h3>Oops! The vehicle you are looking for does not exist</h3>
            </div>
        </div>
    @endif
@endsection