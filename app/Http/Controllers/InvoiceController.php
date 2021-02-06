<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract; 
use PDF;

class InvoiceController extends Controller
{
    //
    public function createInvoicePDF($id) {
        // retreive all records from db
        $invoices = Contract::find($id)->invoices()->get();
 // dd($invoices->count()); 
        // share data to view

  
    return view('invoices.index' , compact('invoices'));
              
        
        




        // download PDF file with download method
      }
}
