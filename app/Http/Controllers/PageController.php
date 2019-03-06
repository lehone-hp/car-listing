<?php
/**
 * Created by PhpStorm.
 * User: lehone
 * Date: 3/5/19
 * Time: 10:46 PM
 */

namespace App\Http\Controllers;


class PageController extends Controller {

    public function index() {
        return view('admin.dashboard');
    }
}