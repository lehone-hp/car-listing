<?php
/**
 * Created by PhpStorm.
 * User: lehone
 * Date: 3/5/19
 * Time: 10:46 PM
 */

namespace App\Http\Controllers;


use App\Brand;
use App\Jobs\VehicleContactEmailJob;
use App\Vehicle;
use App\VehicleContact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller {

    public $search;
    function __construct() {
        $this->search = [
            'budget_high' => null,
            'budget_low'  => null,
            'brand'       => [],
            'year'        => [],
            'driven_high'=> null,
            'driven_low' => null,
            'fuel'        => [],
            'transmission'=> [],
            'q'           => '',
            'color'       => '',
        ];
    }

    public function index() {
        $used_cars = Vehicle::where('condition', 'used')->get();
        $new_cars = Vehicle::where('condition', 'new')->get();
        $featured_cars = Vehicle::where('featured', true)->get();
        $brands = Brand::all();
        return view('welcome', compact('used_cars', 'new_cars',
            'featured_cars', 'brands'));
    }

    public function carListing(Request $request) {
        $search = $this->search;
        $vehicles = new Vehicle();

        if ($request->get('q')) {
            $q = $request->get('q');
            $vehicles = $vehicles->where('name', 'like', '%'.$q.'%')
                ->orWhere('model', 'like', '%'.$q.'%')
                ->orWhere('description', 'like', '%'.$q.'%');
            $search['q'] = $q;
        }

        if ($request->get('color')) {
            $color = $request->get('color');
            $vehicles = $vehicles->where('color', $color);
            $search['color'] = $color;
        }

        if ($request->get('budget')) {
            $budget = explode(',', $request->get('budget'));
            if (count($budget) == 2) {
                if ($budget[0] == 1 && $budget[1] == 1) {
                    $vehicles = $vehicles->where('price', '>=', 100000000);
                } else {
                    $vehicles = $vehicles->whereBetween('price', [$budget[0],$budget[1]]);
                }
                $search['budget_low'] = $budget[0];
                $search['budget_high'] = $budget[1];
            }
        }

        if ($request->get('brand')) {
            $brands = $request->get('brand');
            $vehicles = $vehicles->where(function ($query) use ($brands) {
                foreach ($brands as $index=>$item) {
                    $query->orWhere('brand_id', $item);
                }
            });
            $search['brand'] = $brands;
        }

        if ($request->get('year')) {
            $years = $request->get('year');
            $vehicles = $vehicles->where(function ($query) use ($years) {
                foreach ($years as $index=>$item) {
                    if ($item == 0) {
                        $query->orWhere('make_year', '<=', Carbon::now()->year-19);
                    } else {
                        $query->orWhere('make_year', $item);
                    }
                }
            });
            $search['year'] = $years;
        }

        if ($request->get('driven')) {
            $driven = explode(',', $request->get('driven'));
            if (count($driven) == 2) {
                if ($driven[0] == 1 && $driven[1] == 1) {
                    $vehicles = $vehicles->where('driven', '>=', $driven[0]);
                } else {
                    $vehicles = $vehicles->whereBetween('driven', [$driven[0],$driven[1]]);
                }
                $search['driven_low'] = $driven[0];
                $search['driven_high'] = $driven[1];
            }
        }

        if ($request->get('fuel')) {
            $fuels = $request->get('fuel');
            $vehicles = $vehicles->where(function ($query) use ($fuels) {
                foreach ($fuels as $index=>$item) {
                    $query->orWhere('fuel_type_id', $item);
                }
            });
            $search['fuel'] = $fuels;
        }

        if ($request->get('transmission')) {
            $transmissions = $request->get('transmission');
            $vehicles = $vehicles->where(function ($query) use ($transmissions) {
                foreach ($transmissions as $index=>$item) {
                    $query->orWhere('transmission', $item);
                }
            });
            $search['transmission'] = $transmissions;
        }

        $vehicles = $vehicles->paginate(12);
        $colors = config('constants.colors');

        return view('listing', compact('vehicles', 'search', 'colors'));
    }

    public function showCar($slug) {
        $vehicle = Vehicle::where('slug', $slug)->first();
        return view('single', compact('vehicle'));
    }

    public function contactSeller(Request $request, $slug) {

        $vehicle = Vehicle::where('slug', $slug)->first();
        if (!$vehicle) {
            session()->flash('error', 'Sorry! the vehicle no longer exist');
            return redirect()->back();
        }

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $contact = new VehicleContact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->vehicle_id = $vehicle->id;
        $contact->save();

        // Send an email to the admin
        //$this->dispatch(new VehicleContactEmailJob($vehicle, $contact));
        try {
            //Mail::to('lehone4hope@gmail.com')
            //    ->queue(new \App\Mail\VehicleContact($vehicle, $contact));

            Mail::send('email.vehicle_contact',
                ['contact' => $contact,
                    'vehicle' => $vehicle], function ($message) {
                    $to_email = 'lehone4hope@gmail.com';

                    $message->to($to_email)
                        ->subject('Vehicle Contact');
                });

        } catch (\Exception $e) {}

        session()->flash('success', 'Message sent, seller will get back to you shortly');
        return redirect()->back();
    }
}