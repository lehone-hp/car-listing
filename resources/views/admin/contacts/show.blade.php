@extends('layouts.admin')
@section('title', 'Vehicle Message from '.$message->name)

@section('content')
    <h3 class="page-title">Message from <strong>{{ $message->name }}</strong></h3>

    <!-- Content -->
    <div class="row">
        <div class="col-sm-4">
            <div class="panel">
                <div class="panel-heading">
                    <p class="panel-title">Vehicle Details</p>
                </div>
                <div class="panel-body">
                    <img src="{{ asset($message->vehicle->photo->photo ?: 'admin/img/no-photo.png') }}" style="width: 100%">
                    <h3>{{ $message->vehicle->name }}</h3>
                    <p><small>price: </small>{{ $message->vehicle->price ? 'XAF '.number_format($message->vehicle->price) : 'NEGOTIABLE' }}</p>
                    <hr>
                    <p><i class="fa fa-tags"></i>&nbsp; {{ $message->vehicle->brand->name }}</p>
                    <p><i class="fa fa-tags"></i>&nbsp; {{ $message->vehicle->model }}</p>
                    <p><span class="fa fa-calendar"></span>&nbsp; {{ $message->vehicle->make_year }}</p>
                    <hr>
                    <a href="{{ route('admin.vehicles.show', ['id'=>$message->vehicle->slug]) }}" class="btn btn-primary btn-block">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="panel">
                <div class="panel-heading">
                    <p class="panel-title">Client's Message</p>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-borderless">
                        <tr>
                            <td>Name</td>
                            <td>{{ $message->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $message->email }}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{ $message->phone }}</td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td>{{ date('j M Y, g:i A', strtotime($message->created_at)) }}</td>
                        </tr>
                        <tr>
                            <td>Message</td>
                            <td>{{ $message->message }}</td>
                        </tr>
                    </table>

                    <hr>
                    <button data-toggle="modal" data-target="#confirmDelete" class="btn btn-danger btn-block">Delete Message</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Delete Message from <strong>{{ $message->name }}</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('admin.contact.delete', ['id'=>$message->id]) }}" method="POST">
                        @csrf
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Confirm Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection