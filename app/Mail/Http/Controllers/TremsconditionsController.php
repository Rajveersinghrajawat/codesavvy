<?php

namespace App\Http\Controllers;

use App\Models\Tremsconditions;
use Illuminate\Http\Request;

class TremsconditionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.termsandconditions.terms');
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
        $terms = new Tremsconditions;
        $terms->heading=$request['heading'];
        $terms->description=$request['description'];
        $terms->save();
        notify()->success('Trems conditions Added Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tremsconditions  $tremsconditions
     * @return \Illuminate\Http\Response
     */
    public function show(Tremsconditions $tremsconditions)
    {
        $terms = Tremsconditions::first();
        if (is_null($terms)) {
            return redirect()->route('frontend.terms');
        } else {
            $data = compact('terms');
            return view('frontend.terms', $data);
        }
        
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tremsconditions  $tremsconditions
     * @return \Illuminate\Http\Response
     */
    public function edit(Tremsconditions $tremsconditions)
    {
        $terms = Tremsconditions::first();
        if (is_null($terms)) {
            return redirect()->route('admin.termsandconditions.terms');
        } else {
            $data = compact('terms');
            return view('admin.termsandconditions.terms', $data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tremsconditions  $tremsconditions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tremsconditions $tremsconditions)
    {
        $terms = Tremsconditions::first();
        $terms->heading=$request['heading'];
        $terms->description=$request['description'];
        $terms->save();
        notify()->success('Trems conditions Update Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tremsconditions  $tremsconditions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tremsconditions $tremsconditions)
    {
        //
    }
}
