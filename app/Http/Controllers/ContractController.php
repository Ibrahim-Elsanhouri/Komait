<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract; 
use App\Offer; 

class ContractController extends Controller
{
    public function __construct()
    {
      // $this->middleware('myauth');

          $this->middleware('myauth')->only('enrollment');

     //   $this->middleware('myauth')->except('myauth');
    }
    //
    public function show($id){
        $contract = Contract::find($id); 
      //  dd($contract); 
        return view('contracts.show' , compact('contract'));

    }
    public function store(Request $request){
        Contract::create($request->all()); 
        $offer = Offer::find($request->offers_id);
      
 

        return redirect('/myconsultants')->with('info' ,  '💸تم توقيع الاتفاقية من طرفك الرجاء السداد لتفعيلها '); 
    }
    public function confirmed($id){
        $contract = Contract::find($id); 
        $contract->confirmed == 1; 

        $contract->save(); 

        
        $consultant = $contract->consultant; 
        $consultant->halas_id = 5; 
        $consultant->save();
        return redirect('/myconsultants')->with('info' ,  'جاري البدء في تنفيذ الاتفاقية 👷'); 

    }


}
