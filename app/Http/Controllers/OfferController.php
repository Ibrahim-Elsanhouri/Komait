<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
class OfferController extends Controller
{
    //
    public function consultant_offers($id){
        $offers = Offer::where('consultants_id' , $id)->get();
     //   $consultants_id = $id; 
        return view('offers.index' , compact('offers')); 
    }
    //offer_accepted
    public function offer_accepted($id){
        $offer = Offer::find($id);
      //  dd($id , $offer ); 
        $offer->status = 1; 
        $offer->save(); 

        $consultant = $offer->consultant; 
        $consultant->status = 2; 
        $consultant->save();

     //   $consultants_id = $id; 
        return back()->with('info' , 'تم قبول العرض نشكر لك ثقتك  💖, الرجاء التوقيع على الاتفاقية الالكترونية , لن تفعل الاتفاقية الا بعد السداد '); 
    }
}
