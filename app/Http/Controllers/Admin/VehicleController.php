<?php

namespace App\Http\Controllers\Admin;

use App\Feature;
use App\FeatureVehicle;
use App\Vehicle;
use App\VehiclePhoto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class VehicleController extends Controller
{
    public $search;

    function __construct() {
        $this->search = [
            'q'     => null,
            'brand'  => null
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $search = $this->search;
        $vehicles = new Vehicle();

        if ($request->get('q')) {
            $q = $request->get('q');
            $vehicles = $vehicles->where('name', 'like', '%'.$q.'%');
            $search['q'] = $q;
        }

        if ($request->get('brand')) {
            $brand = $request->get('brand');
            $vehicles = $vehicles->where('brand_id', $brand);
            $search['brand'] = $brand;
        }

        $vehicles = $vehicles->orderBy('created_at', 'ASC')->paginate(20);
        return view('admin.vehicle.index', compact('vehicles', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $conditions = config('constants.car_conditions');
        $transmissions = config('constants.transmissions');
        $colors = config('constants.colors');
        return view('admin.vehicle.create', compact('colors', 'conditions', 'transmissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate(request(), [
            'name' => 'required|string',
            'brand' => 'required',
            'model' => 'required',
            'price' => 'numeric|nullable',
            'old_price' => 'numeric|nullable',
            'description' => 'required|string|min:50',
            'condition' => 'required',
            'transmission' => 'required',
            'year' => 'required|integer',
            'fuel_type' => 'required',
            'number_of_doors' => 'integer|nullable|min:0',
            'number_of_gears' => 'integer|nullable|min:0',
            'number_of_seats' => 'integer|nullable|min:0',
            'number_of_cylinders' => 'integer|nullable|min:0',
            'engine_type' => 'string|nullable',
            'engine_displacement' => 'integer|nullable',
            'color' => 'nullable',
            'driven' => 'numeric|nullable',
            'tank_capacity' => 'numeric|nullable|min:0',
            'pictures' => 'required',
            'pictures.*' => 'image|max:2048'
        ]);

        $vehicle = new Vehicle();
        $vehicle->name = $request->name;
        $vehicle->slug = Str::slug($request->name).'-'.time();
        $vehicle->model = $request->model;
        $vehicle->description = $request->description;
        $vehicle->price = $request->price;
        $vehicle->old_price = $request->old_price;
        if ($request->featured) {
            $vehicle->featured = true;
        }
        $vehicle->make_year = $request->year;
        $vehicle->condition = $request->condition;
        $vehicle->transmission = $request->transmission;
        $vehicle->color = $request->color;
        $vehicle->engine_type = $request->engine_type;
        $vehicle->engine_displacement = $request->engine_displacement;
        $vehicle->fuel_tank_capacity = $request->tank_capacity;
        $vehicle->driven = $request->driven;
        $vehicle->door_count = $request->number_of_doors;
        $vehicle->cylinder_count = $request->number_of_cylinders;
        $vehicle->gear_count = $request->number_of_gears;
        $vehicle->seat_count = $request->number_of_seats;
        $vehicle->brand_id = $request->brand;
        $vehicle->fuel_type_id = $request->fuel_type;
        $vehicle->save();

        foreach (Feature::all() as $feature) {
            if ($request->has('feature_'.$feature->id)) {
                $feature_vehicle = new FeatureVehicle();
                $feature_vehicle->feature_id = $feature->id;
                $feature_vehicle->vehicle_id = $vehicle->id;
                $feature_vehicle->save();
            }
        }


        if ($request->has('pictures')) {
            $index = 0;
            foreach ($request->file('pictures') as $picture) {
                $path = $picture->storeAs('vehicles',
                    'vehicle_'. uniqid() .'_'. time() .'.'.$picture->getClientOriginalExtension(),
                    'public_uploads');

                $vehicle_photo = new VehiclePhoto();
                $vehicle_photo->vehicle_id = $vehicle->id;
                $vehicle_photo->photo = 'uploads/'. $path;
                $vehicle_photo->save();

                if ($index === 0) {
                    $vehicle->vehicle_photo_id = $vehicle_photo->id;
                    $vehicle->save();
                }
                $index++;
            }
        }

        session()->flash('success', $request->name.' successfully uploaded');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $vehicle = Vehicle::where('slug', $id)->first();
        return view('admin.vehicle.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::where('slug', $id)->first();
        $conditions = config('constants.car_conditions');
        $transmissions = config('constants.transmissions');
        $colors = config('constants.colors');

        return view('admin.vehicle.edit', compact('vehicle', 'conditions', 'transmissions', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $vehicle = Vehicle::where('slug', $id)->first();
        if (!$vehicle) {
            session()->flash('error', 'Sorry, the vehicle no longer exist');
        }

        $this->validate(request(), [
            'name' => 'required|string',
            'brand' => 'required',
            'model' => 'required',
            'price' => 'numeric|nullable',
            'old_price' => 'numeric|nullable',
            'description' => 'required|string|min:50',
            'condition' => 'required',
            'transmission' => 'required',
            'year' => 'required|integer',
            'fuel_type' => 'required',
            'number_of_doors' => 'integer|nullable|min:0',
            'number_of_gears' => 'integer|nullable|min:0',
            'number_of_seats' => 'integer|nullable|min:0',
            'number_of_cylinders' => 'integer|nullable|min:0',
            'engine_type' => 'string|nullable',
            'engine_displacement' => 'integer|nullable',
            'color' => 'nullable',
            'driven' => 'numeric|nullable',
            'tank_capacity' => 'numeric|nullable|min:0'
        ]);

        $vehicle->name = $request->name;
        $vehicle->model = $request->model;
        $vehicle->description = $request->description;
        $vehicle->price = $request->price;
        $vehicle->old_price = $request->old_price;
        if ($request->featured) {
            $vehicle->featured = true;
        } else {
            $vehicle->featured = false;
        }
        $vehicle->make_year = $request->year;
        $vehicle->condition = $request->condition;
        $vehicle->transmission = $request->transmission;
        $vehicle->color = $request->color;
        $vehicle->engine_type = $request->engine_type;
        $vehicle->engine_displacement = $request->engine_displacement;
        $vehicle->fuel_tank_capacity = $request->tank_capacity;
        $vehicle->driven = $request->driven;
        $vehicle->door_count = $request->number_of_doors;
        $vehicle->cylinder_count = $request->number_of_cylinders;
        $vehicle->gear_count = $request->number_of_gears;
        $vehicle->seat_count = $request->number_of_seats;
        $vehicle->brand_id = $request->brand;
        $vehicle->fuel_type_id = $request->fuel_type;
        $vehicle->save();

        foreach (Feature::all() as $feature) {
            if ($request->has('feature_'.$feature->id)) {
                $feature_vehicle = new FeatureVehicle();
                $feature_vehicle->feature_id = $feature->id;
                $feature_vehicle->vehicle_id = $vehicle->id;
                $feature_vehicle->save();
            }
        }

        session()->flash('success', $request->name.' successfully updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function removePhoto($photo_id) {
        $photo = VehiclePhoto::find($photo_id);
        if (!$photo) {
            session()->flash('error', 'Sorry, the photo could not be found');
            return redirect()->back();
        }

        $vehicle = $photo->vehicle;
        if ($vehicle->photo_id == $photo_id) {
            $vehicle->photo_id = null;
            foreach ($vehicle->photos as $vehicle_photo) {
                if ($vehicle_photo->id != $photo_id) {
                    $vehicle->photo_id = $vehicle_photo->id;
                    break;
                }
            }
            $vehicle->save();
        }

        $photo->delete();
        session()->flash('success', 'Photo has been deleted successfully');
        return redirect()->back();
    }

    public function addPhotos(Request $request, $vehicle_slug) {
        $vehicle = Vehicle::where('slug', $vehicle_slug)->first();
        if (!$vehicle) {
            session()->flash('error', 'Sorry, the vehicle no longer exist');
        }

        $this->validate(request(), [
            'pictures' => 'required',
            'pictures.*' => 'image|max:2048'
        ]);

        $index = 0;
        foreach ($request->file('pictures') as $picture) {
            $path = $picture->storeAs('vehicles',
                'vehicle_'. uniqid() .'_'. time() .'.'.$picture->getClientOriginalExtension(),
                'public_uploads');

            $vehicle_photo = new VehiclePhoto();
            $vehicle_photo->vehicle_id = $vehicle->id;
            $vehicle_photo->photo = 'uploads/'.$path;
            $vehicle_photo->save();

            if ($index === 0 && $vehicle->vehicle_photo_id == null) {
                $vehicle->vehicle_photo_id = $vehicle_photo->id;
                $vehicle->save();
            }
            $index++;
        }

        session()->flash('success', 'Photos successfully added to '. $vehicle->name);
        return redirect()->back();
    }
}
