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
            'ng'          => null,
        ];
    }

    public function index() {
        $used_cars = Vehicle::where('condition', 'used')->orderBy('created_at', 'DESC')->get();
        $new_cars = Vehicle::where('condition', 'new')->orderBy('created_at', 'DESC')->get();
        $featured_cars = Vehicle::where('featured', true)->orderBy('created_at', 'DESC')->get();
        $top_brand_chunk = Brand::where('photo', '!=', null)->orderBy('name', 'ASC')->get()->chunk(12);
        return view('welcome', compact('used_cars', 'new_cars',
            'featured_cars', 'top_brand_chunk'));
    }

    public function carListing(Request $request) {
        $search = $this->search;
        $vehicles = new Vehicle();

        if ($request->get('ng')) {
            $ng = $request->get('ng');
            $vehicles = $vehicles->where('price', 0);
            $search['ng'] = $ng;
        }

        if ($request->get('budget')) {
            $budget = explode(',', $request->get('budget'));
            if (count($budget) == 2) {
                if ($budget[0] == 1 && $budget[1] == 1) {
                    $vehicles = $vehicles->where('price', '>=', 100000000);
                } else if ($budget[0] == -1 && $budget[1] == -1) {
                    $vehicles = $vehicles->where('price', 0);
                } else {
                    $vehicles = $vehicles->orWhereBetween('price', [$budget[0],$budget[1]]);
                }

                $search['budget_low'] = $budget[0];
                $search['budget_high'] = $budget[1];
            }
        }


        if ($request->get('brand')) {
            $brands = $request->get('brand');
            $vehicles = $vehicles->where(function ($query) use ($brands) {
                foreach ($brands as $index=>$item) {
                    if ($item != null) {
                        $query->orWhere('brand_id', $item);
                    }
                }
            });
            $search['brand'] = $brands;
        }

        if ($request->get('q')) {
            $q = $request->get('q');
            if ($request->get('frmx')) {
                $frmx = $request->get('frmx');
                if ($frmx == 2 || $frmx == 3) {
                    $vehicles = $vehicles->where('model', 'like', '%'.$q.'%');
                } else {
                    $vehicles = $vehicles->where('name', 'like', '%'.$q.'%')
                        ->orWhere('model', 'like', '%'.$q.'%')
                        ->orWhere('description', 'like', '%'.$q.'%');
                }
            } else {
                $vehicles = $vehicles->where('name', 'like', '%'.$q.'%')
                    ->orWhere('model', 'like', '%'.$q.'%')
                    ->orWhere('description', 'like', '%'.$q.'%');
            }

            $search['q'] = $q;
        }

        if ($request->get('color')) {
            $color = $request->get('color');
            $vehicles = $vehicles->where('color', $color);
            $search['color'] = $color;
        }


        if ($request->get('year')) {
            $years = $request->get('year');
            $vehicles = $vehicles->where(function ($query) use ($years) {
                foreach ($years as $index=>$item) {
                    if ($item != null) {
                        if ($item == 1) {
                            $query->orWhere('make_year', '<=', Carbon::now()->year-19);
                        } else {
                            $query->orWhere('make_year', $item);
                        }
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
                    if ($item != null) {
                        $query->orWhere('fuel_type_id', $item);
                    }
                }
            });
            $search['fuel'] = $fuels;
        }

        if ($request->get('transmission')) {
            $transmissions = $request->get('transmission');
            $vehicles = $vehicles->where(function ($query) use ($transmissions) {
                foreach ($transmissions as $index=>$item) {
                    if ($item != null) {
                        $query->orWhere('transmission', $item);
                    }
                }
            });
            $search['transmission'] = $transmissions;
        }

        $vehicles = $vehicles->orderBy('created_at', 'DESC')->paginate(16);
        $colors = config('constants.colors');

        return view('listing', compact('vehicles', 'search', 'colors'));
    }

    public function showCar($slug) {
        $vehicle = Vehicle::where('slug', $slug)->first();
        if ($vehicle) {
            $related = Vehicle::where('brand_id', $vehicle->brand_id)->orderBy('created_at', 'DESC')->paginate(20);
        }
        return view('single', compact('vehicle', 'related'));
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
                    $to_email = setting('to_email', 'neatlimbe@camnet.cm');

                    $message->to($to_email)
                        ->subject('Vehicle Contact');
                });

        } catch (\Exception $e) {}

        session()->flash('success', 'Message sent, seller will get back to you shortly');
        return redirect()->back();
    }

    public function aboutUs() {
        return view('aboutus');
    }

    public function contact() {
        return view('contact');
    }

    public function postContact(Request $request) {

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'email|nullable',
            'message' => 'required'
        ]);
        try {
            Mail::send('email.visitor_email',
                ['name' => $request->name,
                    'email' => $request->email,
                    'content' => $request->message], function ($message) {
                    $to_email = setting('to_email', 'neatlimbe@camnet.cm');

                    $message->to($to_email)
                        ->subject('Visitor Contact');
                });
        } catch (\Exception $e) {}

        session()->flash('success', 'Message sent successfully, we will get back to you shortly');
        return redirect()->back();
    }

    public function services() {
        return view('services');
    }
}