<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * @desc Show the application dashboard.
     */
    public function index()
    {
        return view('admin.user-profile');
    }

    /**
     * @desc Handle Update profile update form submission
     */
    public function editProfile(Request $request)
    {
        $this->validate($request, ['full_name'=>'required']);

        $user = Auth::user();
        $user->name = $request['full_name'];
        $user->save();

        $request->session()->flash('success', __('Profile updated successfully'));
        return redirect()->back();
    }

    /**
     * @desc Change user password
     */
    public function changePassword(Request $request) {
        $messages = [
            'current_password.required' => __('Please enter old password'),
            'password.required' => __('Please enter password'),
        ];

        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'password' => 'required|min:6|confirmed',
        ], $messages);

        // Ensure that user's password matches password from the form
        $validator->after(function ($validator) use ($request) {
            $current_password = Auth::user()->password;
            if(! Hash::check($request['current_password'], $current_password)) {
                $validator->errors()->add('current_password', __('Your current password does not match with the password you provided'));
            }
        });

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = Auth::user();
        $user->password = Hash::make($request['password']);
        $user->update();

        $request->session()->flash('success', __('Password successfully changed'));
        return back();

    }
}
