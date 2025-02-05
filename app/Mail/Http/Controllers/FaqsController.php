<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
use App\Models\Services;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('admin.view_faq');
    }

    public function show_services()
    {
        $services = Services::all();
        return view('admin.faq', compact('services'));
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
        $faqs = new Faqs();
        $faqs->service_id  = $request['services_id'];
        $faqs->question = $request['question'];
        $faqs->answer = $request['answer'];
        $faqs->status = $request['status'];
        $faqs->save();
        
        notify()->success('FAQs added successfully');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function show(Faqs $faqs)
    {
        $faqs = Faqs::paginate(10);
        return view('admin.view-faq', compact('faqs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function edit(Faqs $faqs , $id)
    {
        $faqs = Faqs::find($id);
        $services = Services::all();
        if(is_null($faqs)){
            return redirect()->back();
        }else{
            $data = compact('faqs','services');
            return view('admin.update_faq', $data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faqs $faqs, $id)
    {
        $faqs = Faqs::find($id);
        $faqs->service_id  = $request['services_id'];
        $faqs->question = $request['question'];
        $faqs->answer = $request['answer'];
        $faqs->status = $request['status'];
        $faqs->save();
        
        notify()->success('FAQs Update successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faqs $faqs)
    {
        $faqs->delete();
        notify()->success('FAQs deleted successfully');
        return redirect()->back();
    }
}
