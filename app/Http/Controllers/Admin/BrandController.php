<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $brands = Brand::orderBy('name', 'ASC')->get();
        return view('admin.brand', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate(request(), [
            'name' => 'string|required|unique:brands',
            'logo' => 'image'
        ]);

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);

        if ($request->logo) {
            $file = $request->file('logo');
            $path = $file->storeAs('brands',
                'brand_'. uniqid() .'_'. time() .'.'.$file->getClientOriginalExtension(),
                'public_uploads');
            $brand->photo = 'uploads/'.$path;
        }

        $brand->save();
        session()->flash('success', 'Car Brand successfully added');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);

        if ($request->logo) {
            $path = storage_path('app/public/');
            File::delete($path.'/'.$brand->photo);
            $file = $request->file('logo');
            $path = $file->storeAs('brands',
                'brand_' . uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension(),
                'public_uploads');
            $brand->photo = 'uploads/'.$path;
        }
        $brand->save();

        session()->flash('success', $request->name .' updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $name = $brand->name;

        $brand->delete();
        session()->flash('success', $name.' deleted successfully');
        return redirect()->back();
    }
}
