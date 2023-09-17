<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::all();
        return view('backend.banner.index',compact('banner'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //         'title'=>'string|required',
        //         'description'=>'nullable',
        //         'photo'=>'string|required',
        //         'condition'=>'boolean|nullable',
        //         'status'=>'boolean|nullable',

        // ]);

        {
            if($request->file('photo')){
                $name = time().'.'.$request->photo->extension();
                $request->photo->move(public_path('/backend/Banner/'), $name);
             }

            $banner = new Banner();
            $banner->title = $request->title;
            $banner->slug = str_replace(' ','_',strtolower($request->title));
            $banner->description = $request->description;
            $banner->status = $request->status;
            $banner->condition = $request->condition;
            $banner->photo = $name;
            $banner->save();
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
