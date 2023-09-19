<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $categories = Category::all();
    return view('backend.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            if($request->file('photo')){
                $name = time().'.'.$request->photo->extension();
                $request->photo->move(public_path('/backend/category/'), $name);
             }

            $banner = new Category();
            $banner->title = $request->title;
            $banner->slug = str_replace(' ','_',strtolower($request->title));
            $banner->summary = $request->summary;
            $banner->status = $request->status;
            $banner->is_parent = $request->is_parent;
            $banner->photo = $name;
            $banner->save();
            return redirect()->back()->with('success','Category has be created');
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
