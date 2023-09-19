<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('backend.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.brand.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        {
            if($request->file('photo')){
                $name = time().'.'.$request->photo->extension();
                $request->photo->move(public_path('/backend/brand/'), $name);
             }

            $brand = new Brand();
            $brand->title = $request->title;
            $brand->slug = str_replace(' ','_',strtolower($request->title));
            $brand->status = $request->status;
            $brand->photo = $name;
            $brand->save();
            return redirect()->back()->with('success','Banner has be created');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
