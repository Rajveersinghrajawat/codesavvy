<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.client');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonials = new Testimonials();
        $testimonials->client_name = $request['client_name'];
        $testimonials->massage = $request['massage'];

        if ($request->hasFile('image')) {
            $image = $request->file('image'); 
            $imageName = time() . "." . $image->getClientOriginalExtension(); 
            $image->move(public_path('uploads'), $imageName); 
            $testimonials->image = $imageName; 
        }
        $testimonials->status = $request['status'];
        $testimonials->save();
        return redirect()->back()->with('success', 'Testimonials Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonials $testimonials)
    {
        $testimonials = Testimonials::all();
        return view('admin.client_view',compact('testimonials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $testimonials = Testimonials::find($id);

    if (!$testimonials) {
        return redirect()->back()->with('error', 'Testimonials not found');
    }

    return view('admin.client', compact('testimonials'));
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonials $testimonials)
    {
        $testimonials->client_name = $request->client_name;
        $testimonials->massage = $request->massage;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $testimonials->image = $imageName;
        }
    
        $testimonials->status = $request->status;
        $testimonials->save();
    
        return redirect()->back()->with('success', 'Testimonials updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonials $testimonials)
    {
        $testimonials->delete();
        return redirect()->back()->with('success', 'Testimonials deleted successfully');
    }
}
