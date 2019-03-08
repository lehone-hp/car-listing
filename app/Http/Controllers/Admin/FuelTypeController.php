<?php
/**
 * Created by PhpStorm.
 * User: lehone
 * Date: 3/4/19
 * Time: 1:14 PM
 */

namespace App\Http\Controllers\Admin;


use App\FuelType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FuelTypeController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        $fuel_types = FuelType::all();
        return view('admin.fuel_type', compact('fuel_types'));
    }

    public function create(Request $request) {
        $this->validate(request(), [
            'name' => 'string|required|unique:fuel_types',
        ]);

        $fuel_type = new FuelType();
        $fuel_type->name = $request->name;
        $fuel_type->slug = str_slug($request->name);

        $fuel_type->save();
        Session::flash('success', 'Fuel Type was successfully added');
        return redirect()->back();
    }

    public function purge(Request $request) {
        $fuel_type = FuelType::where('slug', $request->slug)->first();
        if ($fuel_type) {
            $fuel_type->delete();
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


        $fuel_type = FuelType::where('slug', $request->edit_slug)->first();

        if ($fuel_type) {
            $fuel_type->name = $request->new_name;
            $fuel_type->slug = str_slug($request->new_name);
            $fuel_type->save();
            session()->flash('success', $request->new_name .' successfully edited');
        } else {
            session()->flash('error', 'Sorry! The Selected Fuel Type does not exist');
        }

        return redirect()->back();
    }
}