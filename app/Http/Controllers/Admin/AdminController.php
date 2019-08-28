<?php
/**
 * Created by PhpStorm.
 * User: lehone
 * Date: 3/4/19
 * Time: 1:14 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\VehicleContact;

class AdminController extends Controller {

    public function index() {
        return redirect()->route('login');
    }

    public function getDashboard() {
        $contacts = VehicleContact::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.dashboard', compact('contacts'));
    }

}