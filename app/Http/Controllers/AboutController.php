<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Profile;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about  = About::first();
        $data = compact('about');
        return view('admin.about')->with($data);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Not used directly
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = new About;
        $about->about_heading = $request->about_heading;
        $about->massage = $request->massage;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $about->image = $imageName;
        }

        $about->meta_title = $request->meta_title;
        $about->meta_description = $request->meta_description;
        $about->focus_keypress = $request->focus_keypress;

        $about->save();

        return redirect()->with('success', 'About updated successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $meta = About::first(); 
        $about = About::first();
        $profile = Profile::first();
        return view('frontend.about', compact('meta', 'about', 'profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.about_edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $about  = About::first();
        $about->about_heading = $request->about_heading;
        $about->massage = $request->massage;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $about->image = $imageName;
        }

        $about->meta_title = $request->meta_title;
        $about->meta_description = $request->meta_description;
        $about->focus_keypress = $request->focus_keypress;

        $about->save();
        
        notify()->success('About Update successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('about.index')->with('success', 'About deleted successfully!');
    }

    /**
     * Display the meta information for the "about-us" page.
     *
     * @return \Illuminate\Http\Response
     */
  
}
