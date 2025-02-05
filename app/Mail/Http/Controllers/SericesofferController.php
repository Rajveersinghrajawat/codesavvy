<?php

namespace App\Http\Controllers;

use App\Models\Sericesoffer;
use App\Models\Services;
use Illuminate\Http\Request;

class SericesofferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.services-offer.view-offer');
    }

    public function show_services()
    {
        $services = Services::all();
        return view('admin.services-offer.offer', compact('services'));
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
        $offer = new Sericesoffer();
        $offer->heading = $request['heading'];
        $offer->description = $request['description'];
        $offer->service_id  = $request['services_id'];
        $offer->status = $request['status'];
        $offer->save();

        notify()->success('Services Added Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sericesoffer  $sericesoffer
     * @return \Illuminate\Http\Response
     */
    public function show(Sericesoffer $sericesoffer)
    {
        $offer = Sericesoffer::paginate(5);
        $data = compact('offer');
        return view('admin.services-offer.view-offer', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sericesoffer  $sericesoffer
     * @return \Illuminate\Http\Response
     */
    public function edit(Sericesoffer $sericesoffer, $id)
    {
        $offer = Sericesoffer::find($id);
        $services = Services::all();
        if (is_null($offer)) {
            return redirect()->route('admin.services-offer.view-offer');
        } else {
            $data = compact('offer', 'services');
            return view('admin.services-offer.update-offer', $data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sericesoffer  $sericesoffer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sericesoffer $sericesoffer, $id)
    {
        $offer = Sericesoffer::find($id);
        $offer->heading = $request['heading'];
        $offer->description = $request['description'];
        $offer->service_id  = $request['services_id'];
        $offer->status = $request['status'];
        $offer->save();

        notify()->success('Services Update Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sericesoffer  $sericesoffer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sericesoffer $sericesoffer, $id)
    {
        $offer = Sericesoffer::find($id);
        $offer->delete();
        notify()->success('Why Choose Us Deleted Successfully');
        return redirect()->back();
    }
}
