@extends('layouts.admin')
@section('title', 'Upload a New Vehicle')

@section('content')
    <h3 class="page-title">Upload a New Vehicle</h3>

    <form method="POST" action="{{ route('admin.vehicles.store') }}" enctype="multipart/form-data">
    @csrf

    <!--====================================
         Primary Vehicle Details
         =========================================-->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Primary Vehicle Details</h3>
            </div>
            <div class="panel-body">
                <!-- Vehicle Name, Brand and Model -->
                <div class="row">
                    <div class="form-group col-sm-4">
                        <label>Vehicle Name <em>*</em></label>
                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                               name="name" value="{{ old('name') }}"
                               placeholder="e.g. Blue Toyota 4Runner">

                        @if ($errors->has('name'))
                            <span class="text-danger">
                                {{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-4">
                        <label>Make / Brand <em>*</em></label>
                        <select class="form-control {{ $errors->has('brand') ? ' is-invalid' : '' }}"
                                name="brand">
                            <option value="">-- select vehicles brand --</option>
                            @foreach(\App\Brand::orderBy('name', 'ASC')->get() as $brand)
                                <option value="{{ $brand->id }}" {{ old('brand')==$brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('brand'))
                            <span class="text-danger">
                                {{ $errors->first('brand') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-4">
                        <label>Model <em>*</em></label>
                        <input type="text" class="form-control {{ $errors->has('model') ? ' is-invalid' : '' }}"
                               name="model" value="{{ old('model') }}"
                               placeholder="e.g. 4Runner">

                        @if ($errors->has('model'))
                            <span class="text-danger">
                                {{ $errors->first('model') }}</span>
                        @endif
                    </div>
                </div>

                <!-- Vehicle Price, Old Price and Featured-->
                <div class="row">
                    <div class="form-group col-sm-4">
                        <label>Vehicle Price (XAF)</label>
                        <input type="number" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}"
                               name="price" value="{{ old('price') }}"
                               placeholder="10000000">
                        <span class="notes">Leave empty if the price is negotiable</span>

                        @if ($errors->has('price'))
                            <span class="text-danger">
                                {{ $errors->first('price') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-4">
                        <label>Old Price</label>
                        <input type="number" class="form-control {{ $errors->has('old_price') ? ' is-invalid' : '' }}"
                               name="old_price" value="{{ old('old_price') }}"
                               placeholder="13000000">

                        @if ($errors->has('old_price'))
                            <span class="text-danger">
                                {{ $errors->first('old_price') }}</span>
                        @else
                            <span class="notes">Will appear as e.g. <strike> XAF 15000 </strike> next to Vehicle if set</span>
                        @endif

                    </div>
                    <div class="form-group col-sm-4">
                        <label class="col-checkbox">
                            <input type="checkbox"
                                   class="cursor-pointer"
                                   name="featured" {{ old('featured') ? 'checked' : '' }}>
                            <span class="cursor-pointer">Feature Car</span>
                        </label><br>

                        @if ($errors->has('featured'))
                            <span class="text-danger">
                                {{ $errors->first('featured') }}</span>
                        @else
                            <span class="notes">Vehicle will appear in the Featured section</span>
                        @endif
                    </div>
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label>Description <em>*</em></label>
                    <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"
                              name="description"
                              placeholder="Provides customers with more information about the vehicle"
                              rows="4">{{ old('description') }}</textarea>

                    @if ($errors->has('description'))
                        <span class="text-danger">
                           {{ $errors->first('description') }}</span>
                    @endif
                </div>
            </div>
        </div>

        <!--====================================
         Vehicle Pictures
         =========================================-->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Add Pictures of the Vehicle</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <input type="file" name="pictures[]"
                           multiple accept="image/*" id="vehicle_images">
                </div>
                @if ($errors->has('pictures'))
                    <span class="text-danger">
                        {{ $errors->first('pictures') }}</span>
                @endif

                <div class="row" id="vehicle_images_preview">
                </div>
            </div>
        </div>

        <!--====================================
         Technical Details
         =========================================-->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Technical Details</h3>
            </div>
            <div class="panel-body">
                <!-- Condition, Make Year, Transmission and Fuel Type -->
                <div class="row">
                    <div class="form-group col-sm-3">
                        <label>Condition <em>*</em></label>
                        <select class="form-control {{ $errors->has('condition') ? ' is-invalid' : '' }}"
                                name="condition">
                            <option value="">-- select vehicle's condition --</option>
                            @foreach($conditions as $index => $collection)
                                <option value="{{ $index }}" {{ old('condition')==$index ? 'selected' : '' }}>{{ $conditions[$index] }}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('condition'))
                            <span class="text-danger">
                                {{ $errors->first('condition') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-3">
                        <label>Transmission <em>*</em></label>
                        <select class="form-control {{ $errors->has('transmission') ? ' is-invalid' : '' }}"
                                name="transmission">
                            <option value="">-- select transmission type --</option>
                            @foreach($transmissions as $index => $transmission)
                                <option value="{{ $index }}" {{ old('transmission')==$index ? 'selected' : '' }}>{{ $transmissions[$index] }}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('transmission'))
                            <span class="text-danger">
                                {{ $errors->first('transmission') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-3">
                        <label>Make Year <em>*</em></label>
                        <select class="form-control {{ $errors->has('year') ? ' is-invalid' : '' }}"
                                name="year">
                            <option value="">--year car was made --</option>
                            @for ($i = -25; $i < 1; $i++)
                                <option value="{{ \Carbon\Carbon::now()->year + $i }}"
                                        {{ old('year')==(\Carbon\Carbon::now()->year + $i) ? 'selected' : '' }}>
                                    {{ \Carbon\Carbon::now()->year + $i }}</option>
                            @endfor
                        </select>

                        @if ($errors->has('year'))
                            <span class="text-danger">
                                {{ $errors->first('year') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-3">
                        <label>Fuel Type <em>*</em></label>
                        <select class="form-control {{ $errors->has('fuel_type') ? ' is-invalid' : '' }}"
                                name="fuel_type">
                            <option value="">-- select fuel type --</option>
                            @foreach(\App\FuelType::orderBy('name', 'ASC')->get() as $fuel_type)
                                <option value="{{ $fuel_type->id }}"
                                        {{ old('fuel_type')==$fuel_type->id ? 'selected' : '' }}>{{ $fuel_type->name }}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('fuel_type'))
                            <span class="text-danger">
                                {{ $errors->first('fuel_type') }}</span>
                        @endif
                    </div>
                </div>

                <!-- Number of Seats, Gears, Doors and Cylinders -->
                <div class="row">
                    <div class="form-group col-sm-3">
                        <label>Number of Doors </label>
                        <input type="number" class="form-control {{ $errors->has('number_of_doors') ? ' is-invalid' : '' }}"
                               name="number_of_doors" value="{{ old('number_of_doors') }}"
                               min="0">

                        @if ($errors->has('number_of_doors'))
                            <span class="text-danger">
                                {{ $errors->first('number_of_doors') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-3">
                        <label>Number of Gears</label>
                        <input type="number" class="form-control {{ $errors->has('number_of_gears') ? ' is-invalid' : '' }}"
                               name="number_of_gears" value="{{ old('number_of_gears') }}"
                               min="0">

                        @if ($errors->has('number_of_gears'))
                            <span class="text-danger">
                                {{ $errors->first('number_of_gears') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-3">
                        <label>Number of Seats</label>
                        <input type="number" class="form-control {{ $errors->has('number_of_seats') ? ' is-invalid' : '' }}"
                               name="number_of_seats" value="{{ old('number_of_seats') }}"
                               min="0">

                        @if ($errors->has('number_of_seats'))
                            <span class="text-danger">
                                {{ $errors->first('number_of_seats') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-3">
                        <label>Number of Cylinders</label>
                        <input type="number" class="form-control {{ $errors->has('number_of_cylinders') ? ' is-invalid' : '' }}"
                               name="number_of_cylinders" value="{{ old('number_of_cylinders') }}"
                               min="0">

                        @if ($errors->has('number_of_cylinders'))
                            <span class="text-danger">
                                {{ $errors->first('number_of_cylinders') }}</span>
                        @endif
                    </div>
                </div>

                <!-- Engine type and Engine Displacement -->
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Engine Type </label>
                        <input type="text" class="form-control {{ $errors->has('engine_type') ? ' is-invalid' : '' }}"
                               name="engine_type" value="{{ old('engine_type') }}"
                               placeholder="e.g. U2 CRDI Diesel Engine">

                        @if ($errors->has('engine_type'))
                            <span class="text-danger">
                                {{ $errors->first('engine_type') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Engine Displacement (CC)</label>
                        <input type="number" class="form-control {{ $errors->has('engine_displacement') ? ' is-invalid' : '' }}"
                               name="engine_displacement" value="{{ old('engine_displacement') }}"
                               placeholder="e.g. 1500">

                        @if ($errors->has('engine_displacement'))
                            <span class="text-danger">
                                {{ $errors->first('engine_displacement') }}</span>
                        @endif
                    </div>
                </div>

                <!-- Number of Seats, Gears, Doors and Cylinders -->
                <div class="row">
                    <div class="form-group col-sm-4">
                        <label>Color </label>
                        <select class="form-control {{ $errors->has('color') ? ' is-invalid' : '' }}"
                                name="color">
                            <option value="">-- select vehicle's color --</option>
                            @foreach($colors as $index => $color)
                                <option value="{{ $index }}"
                                        {{ old('color')==$index ? 'selected' : '' }}>{{ $colors[$index] }}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('color'))
                            <span class="text-danger">
                                {{ $errors->first('color') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-4">
                        <label>Driven Distance (KM)</label>
                        <input type="number" min="0"
                               name="driven" value="{{ old('driven') }}"
                               class="form-control {{ $errors->has('driven') ? ' is-invalid' : '' }}">

                        @if ($errors->has('driven'))
                            <span class="text-danger">
                                {{ $errors->first('driven') }}</span>
                        @else
                            <span class="notes">Distance the vehicle has already covered</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-4">
                        <label>Fuel Tank Capacity</label>
                        <input type="number" min="0"
                               name="tank_capacity" value="{{ old('tank_capacity') }}"
                               class="form-control {{ $errors->has('tank_capacity') ? ' is-invalid' : '' }}">

                        @if ($errors->has('tank_capacity'))
                            <span class="text-danger">
                                {{ $errors->first('tank_capacity') }}</span>
                        @endif
                    </div>
                </div>

            </div>
        </div>

        <!--====================================
         Vehicles Features
         =========================================-->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Vehicle Features</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    @foreach(\App\Feature::orderBy('name', 'ASC')->get() as $feature)
                        <div class="form-group col-sm-3">
                            <label class="cursor-pointer">
                                <input type="checkbox" name="{{ 'feature_'.$feature->id }}"
                                        {{ old('feature_'.$feature->id) ? 'checked' : '' }}
                                        class="cursor-pointer">
                                <span>{{ $feature->name }}</span>
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12 col-md-12">
                <button class="btn btn-primary btn-block btn-lg">Upload New Vehicle</button>
            </div>
        </div>

    </form>
@endsection

@section('footer_script')
    <script>

        $(function () {
            $('#vehicle_images').on('change', function () {
                var images = this.files;

                $('#vehicle_images_preview').html('');
                for (i = 0; i < images.length; i++) {
                    var file = images[i];
                    var reader = new FileReader();
                    reader.addEventListener("load", function (event) {
                        var img = '<div class="col-sm-2 col-xs-3"><img class="img-100" id="img'+i+'" src="'+event.target.result+'"></div>';
                        $('#vehicle_images_preview').append(img);
                    });
                    reader.readAsDataURL(file);
                }
            });

        });
    </script>
@endsection