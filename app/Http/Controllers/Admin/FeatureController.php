<?php
/**
 * Created by PhpStorm.
 * User: lehone
 * Date: 3/4/19
 * Time: 1:14 PM
 */

namespace App\Http\Controllers\Admin;


use App\Feature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class FeatureController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        $car_features = Feature::orderBy('name', 'ASC')->get();
        return view('admin.car_features', compact('car_features'));
    }

    public function create(Request $request) {
        $this->validate(request(), [
            'name' => 'string|required|unique:features',
        ]);

        $car_feature = new Feature();
        $car_feature->name = $request->name;
        $car_feature->slug = Str::slug($request->name);

        $car_feature->save();
        Session::flash('success', 'Fuel Type was successfully added');
        return redirect()->back();
    }

    public function purge(Request $request) {
        $car_feature = Feature::where('slug', $request->slug)->first();
        if ($car_feature) {
            $car_feature->delete();
            session()->flash('success', 'Fuel Type successfully deleted');
        } else {
            Session::flash('error', 'Sorry! fuel type does not exist');
        }
        return redirect()->back();
    }

    public function edit(Request $request) {
        $this->validate(request(), [
            'edit_slug' => 'required|string',
            'new_name' => 'required|string'
        ]);


        $car_feature = Feature::where('slug', $request->edit_slug)->first();

        if ($car_feature) {
            $car_feature->name = $request->new_name;
            $car_feature->slug = Str::slug($request->new_name);
            $car_feature->save();
            session()->flash('success', $request->new_name .' successfully edited');
        } else {
            session()->flash('error', 'Sorry! The Selected Fuel Type does not exist');
        }

        return redirect()->back();
    }
}