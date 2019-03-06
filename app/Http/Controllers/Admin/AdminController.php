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

    public function __construct(){
        $this->middleware('auth');
    }

    public function getDashboard() {
        return view('admin.dashboard');
    }

}