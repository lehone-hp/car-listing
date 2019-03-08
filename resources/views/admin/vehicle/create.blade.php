@extends('layouts.admin')
@section('title', 'Upload a New Vehicle')

@section('content')
    <h3 class="page-title">Upload a New Vehicle</h3>

    <form method="POST" enctype="multipart/form-data">
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
                        <input type="text" class="form-control"
                               placeholder="e.g. Blue Toyota 4Runner">
                    </div>
                    <div class="form-group col-sm-4">
                        <label>Make / Brand <em>*</em></label>
                        <select class="form-control">
                            <option>--select vehicles brand--</option>
                            @foreach(\App\Brand::orderBy('name', 'ASC')->get() as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-4">
                        <label>Model</label>
                        <input type="text" class="form-control"
                               placeholder="e.g. 4Runner">
                    </div>
                </div>

                <!-- Vehicle Price, Old Price and Featured-->
                <div class="row">
                    <div class="form-group col-sm-4">
                        <label>Vehicle Price (XAF)</label>
                        <input type="number" class="form-control" placeholder="10000000">
                        <span class="notes">Leave empty if the price is negotiable</span>

                    </div>
                    <div class="form-group col-sm-4">
                        <label>Old Price</label>
                        <input type="number" class="form-control">
                        <span class="notes">Will appear as e.g. <strike> XAF 15000 </strike> next to Vehicle if set</span>
                    </div>
                    <div class="form-group col-sm-4">
                        <label class="col-checkbox">
                            <input type="checkbox">
                            <span>Feature Car</span>
                        </label><br>
                        <span class="notes">Vehicle will appear in the Featured section</span>
                    </div>
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label>Description <em>*</em></label>
                    <textarea class="form-control" placeholder="Provides customers with more information about the vehicle" rows="4"></textarea>
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
                        <select class="form-control">
                            @foreach($conditions as $index => $collection)
                                <option value="{{ $index }}">{{ $conditions[$index] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-3">
                        <label>Transmission <em>*</em></label>
                        <select class="form-control">
                            @foreach($transmissions as $index => $transmission)
                                <option value="{{ $index }}">{{ $transmissions[$index] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-3">
                        <label>Make Year</label>
                        <select class="form-control">
                            <option>--year car was made --</option>
                            @for ($i = -25; $i < 1; $i++)
                                <option value="{{ \Carbon\Carbon::now()->year + $i }}">
                                    {{ \Carbon\Carbon::now()->year + $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group col-sm-3">
                        <label>Fuel Type </label>
                        <select class="form-control">
                            <option>--select fuel type--</option>
                            @foreach(\App\FuelType::orderBy('name', 'ASC')->get() as $fuel_type)
                                <option value="{{ $fuel_type->id }}">{{ $fuel_type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Number of Seats, Gears, Doors and Cylinders -->
                <div class="row">
                    <div class="form-group col-sm-3">
                        <label>Number of Doors </label>
                        <input type="number" min="0" class="form-control">
                    </div>
                    <div class="form-group col-sm-3">
                        <label>Number of Gears</label>
                        <input type="number" min="0" class="form-control">
                    </div>
                    <div class="form-group col-sm-3">
                        <label>Number of Seats</label>
                        <input type="number" min="0" class="form-control">
                    </div>
                    <div class="form-group col-sm-3">
                        <label>Number of Cylinders</label>
                        <input type="number" min="0" class="form-control">
                    </div>
                </div>

                <!-- Engine type and Engine Displacement -->
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Engine Type </label>
                        <input type="text" class="form-control" placeholder="e.g. U2 CRDI Diesel Engine">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Engine Displacement (CC)</label>
                        <input type="number" class="form-control" placeholder="e.g. 1500">
                    </div>
                </div>

                <!-- Number of Seats, Gears, Doors and Cylinders -->
                <div class="row">
                    <div class="form-group col-sm-4">
                        <label>Color </label>
                        <select class="form-control">
                            <option>-- select vehicle's color --</option>
                            @foreach($colors as $index => $color)
                                <option value="{{ $index }}">{{ $colors[$index] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-4">
                        <label>Driven Distance (KM)</label>
                        <input type="number" min="0" class="form-control">
                        <span class="notes">Distance the vehicle has already covered</span>
                    </div>
                    <div class="form-group col-sm-4">
                        <label>Number of Seats</label>
                        <input type="number" min="0" class="form-control">
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
                            <label>
                                <input type="checkbox" name="{{ 'feature_'.$feature->id }}">
                                <span>{{ $feature->name }}</span>
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <button class="btn btn-primary btn-block btn-lg">Upload New Vehicle</button>

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