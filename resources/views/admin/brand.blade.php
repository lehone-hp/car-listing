@extends('layouts.admin')
@section('title', 'Car Brands')

@section('content')
    <h3 class="page-title">Car Brands</h3>

    <!-- Content -->
    <div class="row">
        <div class="col-md-8">
            <!-- BASIC TABLE -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">List of Car Brands</h3>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Logo</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="{{ asset('admin/img/logo-dark.png') }}">
                            </td>
                            <td>Toyota</td>
                            <td>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#editBrandModal">Edit</button>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#deleteBrandModal">Delete</button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td colspan="4">No Brands Found</td>
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
                    <h3 class="panel-title">Add New Car Brand</h3>
                </div>
                <div class="panel-body">
                    <form method="POST">
                        <div class="input-group">
                            <label>Brand Name</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="input-group">
                            <label>Logo</label>
                            <input type="file" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </form>
                </div>
            </div>
            <!-- END TABLE NO PADDING -->
        </div>
    </div>

    <div class="modal fade" id="editBrandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Edit Car Brand</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST">
                    <div class="modal-body">
                        <div class="input-group">
                            <label>Brand Name</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="input-group">
                            <label>Logo</label>
                            <input type="file" class="form-control">
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

    <div class="modal fade" id="deleteBrandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Permanently Delete <strong>Toyota</strong>?</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST">
                        @csrf
                        <input type="hidden" name="brand_id"
                               id="remove_brand_id" value="">
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-danger"  type="submit" href="#">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection