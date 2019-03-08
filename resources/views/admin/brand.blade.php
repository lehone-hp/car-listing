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
                            <th class="text-center">Logo</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if ($brands->count() > 0)
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td class="brand-logo-sm">
                                        @if($brand->photo)
                                            <img src="{{ asset("storage/".$brand->photo) }}">
                                        @endif
                                    </td>
                                    <td>{{ $brand->name }}</td>
                                    <td>
                                        <button class="btn btn-primary" onclick="editBrand('{{$brand->id}}', '{{$brand->name}}')">Edit</button>
                                        <button class="btn btn-danger" onclick="deleteBrand('{{$brand->id}}', '{{$brand->name}}')">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="text-center">
                                <td colspan="4">No Brands Found</td>
                            </tr>
                        @endif
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
                    <form method="POST" action="{{ route('admin.brands.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <label>Brand Name</label>
                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   name="name" value="{{ old('name') }}" required>

                            @if ($errors->has('name'))
                                <span class="text-danger">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>

                        <div class="input-group">
                            <label>Logo</label>
                            <input type="file" class="form-control{{ $errors->has('logo') ? ' is-invalid' : '' }}"
                                   name="logo">

                            @if ($errors->has('logo'))
                                <span class="text-danger">
                                    {{ $errors->first('logo') }}
                                </span>
                            @endif
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
                <form method="POST" action="" enctype="multipart/form-data" id="edit_form">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="input-group">
                            <label>Brand Name</label>
                            <input type="text" name="name" id="edit_name"
                                   class="form-control" required>
                        </div>

                        <div class="input-group">
                            <label>Logo</label>
                            <input type="file" name="logo"
                                   class="form-control">
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
                    <h3 class="modal-title" id="exampleModalLabel">Permanently Delete <strong id="delete_name">Toyota</strong>?</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" action="" id="delete_form">
                    @csrf
                    @method('DELETE')
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-danger"  type="submit" href="#">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('footer_script')
<script>
    function deleteBrand(brand_id, brand_name) {
        $('#delete_name').html(brand_name);
        $('#delete_form').attr('action', 'brands/'+brand_id);
        $('#deleteBrandModal').modal('show');
    }

    function editBrand(brand_id, brand_name) {
        $('#editBrandModal').modal('show');
        $('#edit_form').attr('action', 'brands/'+brand_id);
        $('#edit_name').val(brand_name);
    }
</script>
@endsection