<?php

namespace App\Http\Controllers;

use App\Mail\Welcomemail;
use App\Models\Queres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QueresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.contact');
    }

    public function view_admin()
    {
        return view('admin.querys');
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
    
        $contact = new Queres();
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->phone_number = $request['phone_number'];
        $contact->service = $request['service'];
        $contact->massage = $request['massage'];
        $contact->save();

        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'phone_number' => $request['phone_number'],
            'service' => $request['service'],
            'massage' => $request['massage'],
        ];
    
        Mail::to('codesavvynestinfo@gmail.com')->send(new Welcomemail($data, 'admin'));
        Mail::to($data['email'])->send(new Welcomemail($data, 'thankyou'));
    
        return redirect()->back()->with('message', 'Your message has been sent successfully!');
    }
    
     public function single_store(Request $request)
    {
    
    
        $contact = new Queres();
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->phone_number = $request['phone_number'];
        $contact->service = $request['service'];
        $contact->massage = $request['massage'];
        $contact->save();

        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'phone_number' => $request['phone_number'],
            'service' => $request['service'],
            'massage' => $request['massage'],
        ];
    
        Mail::to('codesavvynestinfo@gmail.com')->send(new Welcomemail($data, 'admin'));
        Mail::to($data['email'])->send(new Welcomemail($data, 'thankyou'));
    
        return redirect()->back()->with('message', 'Your message has been sent successfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Queres  $queres
     * @return \Illuminate\Http\Response
     */
    public function show(Queres $queres)
    {
        $contact = Queres::all();
        return view('admin.querys', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Queres  $queres
     * @return \Illuminate\Http\Response
     */
    public function edit(Queres $queres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Queres  $queres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Queres $queres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Queres  $queres
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Queres::find($id);
        $contact->delete();
        notify()->success('Query has been deleted successfully!');
        return redirect()->back();
    }
}
