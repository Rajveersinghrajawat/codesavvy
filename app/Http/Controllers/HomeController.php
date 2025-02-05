<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Home;
use App\Models\Profile;
use App\Models\Services;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home  = home::first();
        return view('admin.home', compact('home'));
    }

    public function data_show() 
    {
        $meta = Home::find(1);
        $banner = Banner::where('status', 1)->get();
        $about  = About::first();
        $services = Services::all();
        $profile = Profile::first();
        $testimonials = Testimonials::where('status', 1)->get();
        return view('frontend.index', compact('about', 'meta', 'testimonials', 'services', 'profile','banner'));
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
        $home = new Home;
        $home->meta_title = $request['meta_title'];
        $home->meta_description = $request['meta_description'];
        $home->focus_keypress = $request['focus_keypress'];

        $home->save();



        return view('admin.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        $home  = home::first();
        $home->meta_title = $request['meta_title'];
        $home->meta_description = $request['meta_description'];
        $home->focus_keypress = $request['focus_keypress'];
        $home->save();
        
        notify()->success('Update Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
