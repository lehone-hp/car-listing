<?php
/**
 * Created by PhpStorm.
 * User: lehone
 * Date: 3/5/19
 * Time: 10:46 PM
 */

namespace App\Http\Controllers;


use App\Brand;
use App\Vehicle;

class PageController extends Controller {

    public function index() {
        $used_cars = Vehicle::where('condition', 'used')->get();
        $new_cars = Vehicle::where('condition', 'new')->get();
        $featured_cars = Vehicle::where('featured', true)->get();
        $brands = Brand::all();
        return view('welcome', compact('used_cars', 'new_cars',
            'featured_cars', 'brands'));
    }

    public function carListing() {
        return view('listing');
    }

    public function showCar($slug) {
        $vehicle = Vehicle::where('slug', $slug)->first();
        return view('single', compact('vehicle'));
    }
}