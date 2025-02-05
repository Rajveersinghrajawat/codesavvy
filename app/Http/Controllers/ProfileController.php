<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.profile');
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
        $profile = new Profile();
        $profile->admin_name = $request['admin_name'];
        $profile->admin_email = $request['admin_email'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $profile->image = $imageName;
        }
        $profile->save();
        return redirect()->back()->with('success', 'Profile Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        $profile = Profile::first();
        
        if(is_null($profile)){
            notify()->error('Profile Not Found');
        }
        else{
            return view('admin.profile', compact('profile'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $profile  = Profile::first();

        if (!$profile) {
            notify()->error('Profile not found.');
            return redirect()->back();
        }

        $profile->admin_name = $request['admin_name'];
        $profile->admin_email = $request['admin_email'];
        $profile->fackbook = $request['fackbook'];
        $profile->whatsapp = $request['whatsapp'];
        $profile->instagram = $request['instagram'];
        $profile->linkedin = $request['linkedin'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $profile->image = $imageName;
        }
        $profile->save();
        notify()->success('Profile Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
