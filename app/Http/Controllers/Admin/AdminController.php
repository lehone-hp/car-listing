<?php
/**
 * Created by PhpStorm.
 * User: lehone
 * Date: 3/4/19
 * Time: 1:14 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class AdminController extends Controller {

    public function index() {
        return redirect()->route('login');
    }

    public function getDashboard() {
        return view('admin.dashboard');
    }

}