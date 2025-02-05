<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Invoice;
use App\Mail\InvoiceMail;
use App\Models\Profile;
use App\Models\Services;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class InvoiceController extends Controller
{

    public function index()
    {
        $services = Services::all();
        return view('admin.invoice.invoicedetails', compact('services'));
    }

    
   
    public function create()
    {
        //
    }


    public function Store(Request $request)
    {
        $invoice = new Invoice;
        $invoice->customer_name = $request->customer_name;
        $invoice->customer_number = $request->customer_number;
        $invoice->customer_email = $request->customer_email;
        $invoice->services_name = $request->services_name;
        $invoice->customer_address = $request->customer_address;
        $invoice->gst_tax = $request->gst_tax;
        $invoice->payment_status = $request->payment_status;
        $invoice->payment_amount = $request->payment_amount;

        $pdf = PDF::loadView('admin.pdf.invoice', compact('invoice'));
        $pdfPath = storage_path('app/public/invoices/invoice_' . $invoice->id . '.pdf');
        $pdf->save($pdfPath);

       
        Mail::to($invoice->customer_email)->send(new InvoiceMail($invoice, $pdfPath));

        notify()->success('Invoice Created Successfully');

        $invoice->save();

        return redirect()->back();
    }

    public function show(Invoice $invoice)
    {
        //
    }


    public function edit(Invoice $invoice)
    {
        //
    }


    public function update(Request $request)
    {
        //
    }

    public function delete(Invoice $invoice)
    {
        //
    }


}
