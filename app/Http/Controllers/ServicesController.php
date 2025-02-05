<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\MetaServices;
use App\Models\Profile;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.add-services');
    }

    public function meta_show()
    {
        $meta  = MetaServices::first();
        $services = Services::all();
        $profile = Profile::first();
        return view('frontend.service', compact('meta', 'services', 'profile'));
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
        $services = new Services();
        $services->services_title = $request['services_title'];
        $services->services_description = $request['services_description'];

        if ($request->hasFile('services_image')) {
            $image = $request->file('services_image');
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $services->services_image = $imageName;
        }

        if ($request->hasFile('services_images2')) {
            $image = $request->file('services_images2');
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $services->services_images2 = $imageName;
        }

        $services->services_slug = $request['services_slug'];
        $services->services_heading1 = $request['services_heading1'];
        $services->services_description2 = $request['services_description2'];
        $services->contact_heading = $request['contact_heading'];
        $services->contact_description = $request['contact_description'];
        $services->meta_title = $request['meta_title'];
        $services->meta_description = $request['meta_description'];
        $services->focus_keypress = $request['focus_keywords'];
        $services->save();
        notify()->success('Services Added Successfully');
        return redirect()->back();
    }

    public function meta(Request $request)
    {
        $meta = new MetaServices;
        $meta->meta_title = $request['meta_title'];
        $meta->meta_description = $request['meta_description'];
        $meta->focus_keypress = $request['focus_keypress'];
        $meta->save();
        return redirect()->back()->with('message', 'Services Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $services = Services::all();
        return view('admin.services', compact('services'));
    }

    public function single($services_slug)
    {
        $service = Services::where('services_slug', $services_slug)->firstOrFail(); 
    
        $faqs = $service->faqs;
        $profile = Profile::first();
        $whychooseus = $service->whychooseus;
        $offer = $service->sericesoffer;
        $meta = (object) [
            'meta_title' => $service->meta_title,
            'meta_description' => $service->meta_description,
            'focus_keypress' => $service->focus_keypress,
        ];
        return view('frontend.single_services', compact('service','faqs','meta','whychooseus', 'profile' ,  'offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Services::find($id);

        if(is_null($service)){
            return redirect()->route('admin.view-faq');
        }else{
        $data = compact('service');
        return view('admin.services_update', $data);
    }
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

     

        $services = Services::find($id);
        $services->services_title = $request['services_title'];
        $services->services_description = $request['services_description'];

        if ($request->hasFile('services_image')) {
            $image = $request->file('services_image');
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $services->services_image = $imageName;
        }

        if ($request->hasFile('services_images2')) {
            $image = $request->file('services_images2');
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $services->services_images2 = $imageName;
        }

        $services->services_slug = $request['services_slug'];
        $services->services_heading1 = $request['services_heading1'];
        $services->services_description2 = $request['services_description2'];
        $services->contact_heading = $request['contact_heading'];
        $services->contact_description = $request['contact_description'];
        $services->meta_title = $request['meta_title'];
        $services->meta_description = $request['meta_description'];
        $services->focus_keypress = $request['focus_keypress'];

        $services->save();
    
        notify()->success('Services Updated Successfully');
        return redirect()->route('admin.services.show');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
