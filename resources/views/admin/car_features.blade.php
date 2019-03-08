@extends('layouts.admin')
@section('title', 'Car Features')

@section('content')
    <h3 class="page-title">Car Features</h3>

    <!-- Content -->
    <div class="row">
        <div class="col-md-8">
            <!-- BASIC TABLE -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">List of Car Features</h3>
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
                        @if ($car_features->count() > 0)
                            @foreach($car_features as $car_feature)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $car_feature->name }}</td>
                                    <td>
                                        <button class="btn btn-primary" onclick="editCarFeature('{{ $car_feature->slug }}', '{{ $car_feature->name }}')">Edit</button>
                                        <button class="btn btn-danger" onclick="deleteCarFeature('{{ $car_feature->slug }}', '{{ $car_feature->name }}')">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="text-center">
                                <td colspan="4">No Car Features Found</td>
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
                    <h3 class="panel-title">Add New Car Feature</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('admin.car-features') }}">
                        @csrf
                        <div class="input-group">
                            <label>Car Feature</label>
                            <input type="text" value="{{ old('name') }}"
                                   name="name" required
                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">

                            @if ($errors->has('name'))
                                <span class="text-danger">
                                    {{ $errors->first('name') }}
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

    <div class="modal fade" id="editCarFeatureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Edit Car Feature</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.car-features.edit') }}">
                    @csrf

                    <input type="hidden" name="edit_slug" id="edit_slug">
                    <div class="modal-body">
                        <div class="input-group">
                            <label>Car Feature</label>
                            <input type="text" name="new_name"
                                   id="edit_name" required
                                   class="form-control{{ $errors->has('new_name') ? ' is-invalid' : '' }}">

                            @if ($errors->has('new_name'))
                                <span class="text-danger">
                                    {{ $errors->first('new_name') }}
                                </span>
                            @endif
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

    <div class="modal fade" id="deleteCarFeatureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Permanently Delete <strong id="delete_feature_name">Diesel</strong>?</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.car-features.delete') }}" id="remove_form">
                    @csrf
                    <input type="hidden" name="slug"
                           id="remove_car_feature_id" value="">
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
        $(function () {
            if ("{{$errors->has('new_name')}}" !== "") {
                $('#editCarFeatureModal').modal('show');
            }
        });
        function deleteCarFeature(car_feature_slug, car_feature_name) {
            $('#delete_feature_name').html(car_feature_name);
            $('#remove_car_feature_id').val(car_feature_slug);
            $('#deleteCarFeatureModal').modal('show');
        }

        function editCarFeature(car_feature_slug, car_feature_name) {
            $('#editCarFeatureModal').modal('show');
            $('#edit_slug').val(car_feature_slug);
            $('#edit_name').val(car_feature_name);
        }
    </script>
@endsection