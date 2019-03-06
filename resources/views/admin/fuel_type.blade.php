@extends('layouts.admin')
@section('title', 'Fuel Types')

@section('content')
    <h3 class="page-title">Fuel Types</h3>

    <!-- Content -->
    <div class="row">
        <div class="col-md-8">
            <!-- BASIC TABLE -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">List of Fuel Types</h3>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Diesel</td>
                            <td>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#editFuelTypeModal">Edit</button>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#deleteFuelTypeModal">Delete</button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td colspan="4">No Fuel Types Found</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END BASIC TABLE -->
        </div>
        <div class="col-md-4">
            <!-- TABLE NO PADDING -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Add New Fuel Type</h3>
                </div>
                <div class="panel-body">
                    <form method="POST">
                        <div class="input-group">
                            <label>Fuel Type</label>
                            <input type="text" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </form>
                </div>
            </div>
            <!-- END TABLE NO PADDING -->
        </div>
    </div>

    <div class="modal fade" id="editFuelTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Edit Fuel Type</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST">
                    <div class="modal-body">
                        <div class="input-group">
                            <label>Fuel Type</label>
                            <input type="text" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary"  type="submit" href="#">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteFuelTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Permanently Delete <strong>Diesel</strong>?</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST">
                        @csrf
                        <input type="hidden" name="fuel_type_id"
                               id="remove_fuel_type_id" value="">
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-danger"  type="submit" href="#">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection