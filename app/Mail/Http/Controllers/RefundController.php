<?php

namespace App\Http\Controllers;

use App\Models\refund;
use Illuminate\Http\Request;

class RefundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.refundpolicy.refund');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function show(refund $refund)
    {
        $refund = refund::first();
        if (is_null($refund)) {
            return redirect()->route('frontend.refund');
        } else {
            $data = compact('refund');
            return view('frontend.refund', $data);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function edit(refund $refund)
    {
        $refund = refund::first();
        if (is_null($refund)) {
            return redirect()->route('admin.refundpolicy.refund');
        } else {
            $data = compact('refund');
            return view('admin.refundpolicy.refund', $data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, refund $refund)
    {
        $refund = refund::first();
        $refund->heading=$request['heading'];
        $refund->description=$request['description'];
        $refund->save();
        notify()->success('Refund Policy Update Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function destroy(refund $refund)
    {
        //
    }
}
