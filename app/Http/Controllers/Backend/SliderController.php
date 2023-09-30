<?php

namespace App\Http\Controllers\Backend;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders =Slider::get();
        return view('backend.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            if($request->file('photo')){
                $name = time().'.'.$request->photo->extension();
                $request->photo->move(public_path('/backend/Slider/'), $name);
             }

            $slider = new Slider();
            $slider->title = $request->title;
            $slider->slug = str_replace(' ','_',strtolower($request->title));
            $slider->description = $request->description;
            $slider->status = $request->status;
            $slider->photo = $name;
            $slider->save();
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
