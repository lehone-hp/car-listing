<?php
/**
 * Created by PhpStorm.
 * User: lehone
 * Date: 3/4/19
 * Time: 1:14 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class FuelTypeController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        return view('admin.fuel_type');
    }

}