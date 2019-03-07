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
                        @if ($fuel_types->count() > 0)
                            @foreach($fuel_types as $fuel_type)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $fuel_type->name }}</td>
                                    <td>
                                        <button class="btn btn-primary" onclick="editFuelType('{{ $fuel_type->slug }}', '{{ $fuel_type->name }}')">Edit</button>
                                        <button class="btn btn-danger" onclick="deleteFuelType('{{ $fuel_type->slug }}', '{{ $fuel_type->name }}')">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="text-center">
                                <td colspan="4">No Fuel Types Found</td>
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
                    <h3 class="panel-title">Add New Fuel Type</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('admin.fuel-types') }}">
                        @csrf
                        <div class="input-group">
                            <label>Fuel Type</label>
                            <input type="text" value="{{ old('name') }}"
                                   name="name"
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

    <div class="modal fade" id="editFuelTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Edit Fuel Type</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.fuel-types.edit') }}">
                    @csrf

                    <input type="hidden" name="edit_slug" id="edit_slug">
                    <div class="modal-body">
                        <div class="input-group">
                            <label>Fuel Type</label>
                            <input type="text" name="new_name"
                                   id="edit_name"
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

    <div class="modal fade" id="deleteFuelTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Permanently Delete <strong id="delete_fuel_name">Diesel</strong>?</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.fuel-types.delete') }}" id="remove_form">
                    @csrf
                    <input type="hidden" name="slug"
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

@section('footer_script')
    <script>
        $(function () {
            if ("{{$errors->has('new_name')}}" !== "") {
                $('#editFuelTypeModal').modal('show');
            }
        });
        function deleteFuelType(fuel_type_slug, fuel_type_name) {
            $('#delete_fuel_name').html(fuel_type_name);
            $('#remove_fuel_type_id').val(fuel_type_slug);
            $('#deleteFuelTypeModal').modal('show');
        }

        function editFuelType(fuel_type_slug, fuel_type_name) {
            $('#editFuelTypeModal').modal('show');
            $('#edit_slug').val(fuel_type_slug);
            $('#edit_name').val(fuel_type_name);
        }
    </script>
@endsection