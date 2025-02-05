<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Whychooseus;

class WhychooseusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.comman-part.why');
    }

    public function show_services()
    {
        $services = Services::all();
        return view('admin.comman-part.why', compact('services'));
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
        $whychooseus = new Whychooseus();
        $whychooseus->heading = $request['heading'];
        $whychooseus->description = $request['description'];
        $whychooseus->service_id  = $request['services_id'];
        $whychooseus->status = $request['status'];
        $whychooseus->save();
        notify()->success('Why Choose Us Added Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Whychooseus $whychooseus)
    {
        $whychooseus = Whychooseus::paginate(10);
        return view('admin.comman-part.view-why', compact('whychooseus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $whychooseus = Whychooseus::find($id);
        $services = Services::all();
        if (is_null($whychooseus)) {
            return redirect()->route('admin.view-why');
        } else {
            $data = compact('whychooseus', 'services');
            return view('admin.comman-part.update-why', $data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Whychooseus $whychooseus, $id)
    {
        $whychooseus = Whychooseus::find($id);
        $whychooseus->heading = $request['heading'];
        $whychooseus->description = $request['description'];
        $whychooseus->service_id  = $request['services_id'];
        $whychooseus->status = $request['status'];
        $whychooseus->save();
        notify()->success('Why Choose Us Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $whychooseus = Whychooseus::find($id);
        $whychooseus->delete();
        notify()->success('Why Choose Us Deleted Successfully');
        return redirect()->back();
    }
}
