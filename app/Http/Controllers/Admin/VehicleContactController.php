<?php

namespace App\Http\Controllers\Admin;

use App\VehicleContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleContactController extends Controller {

    public $search;

    function __construct() {
        $this->search = [
            'q'     => null,
            'date'  => null
        ];
    }

    public function index(Request $request) {
        $search = $this->search;
        $contacts = new VehicleContact();

        if ($request->get('q')) {
            $q = $request->get('q');
            $contacts = $contacts->where('name', 'like', '%'.$q.'%')
                            ->orWhere('email', 'like', '%'.$q.'%')
                            ->orWhere('phone', 'like', '%'.$q.'%')
                            ->orWhere('message', 'like', '%'.$q.'%');
            $search['q'] = $q;
        }

        if ($request->get('date')) {
            $date = $request->get('date');
            if ($date == 1) {
                $contacts = $contacts->orderBy('created_at', 'DESC');
            } else{
                $contacts = $contacts->orderBy('created_at', 'ASC');
            }
            $search['date'] = $date;
        } else {
            $contacts = $contacts->orderBy('created_at', 'DESC');
        }

        $contacts = $contacts->paginate(10);
        return view('admin.contacts.index',
            compact('contacts','search'));
    }

    public function show($id) {
        $message = VehicleContact::findOrFail($id);
        $message->status = 'read';
        $message->save();
        return view('admin.contacts.show', compact('message'));
    }

    public function deleteMessage($id) {
        $message = VehicleContact::findOrFail($id);
        $message->delete();

        session()->flash('success', 'Message Successfully deleted');
        return redirect()->route('admin.contact.index');
    }
}
