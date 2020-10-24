<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consultant; 
use CRUDBooster; 
class ConsultantController extends Controller
{
    //
    public function create(){
      //  dd('test');
        return view('consultants.create'); 

    }
    public function store(Request $request){
     //   dd($request->all()); 
        Consultant::create($request->all()); 
        
        return back()->with('warning' , 'تم ارسال طلبك الى قسم الاستشارات بنجاح , سيتم ارسال العرض في اقرب وقت ⏳');
    }
    public function myconsultants(){
        $myconsultants = Consultant::where('cms_users_id' , CRUDBooster::myId())->get();
     //   dd($myconsultants);
     return view('consultants.myconsultants' , compact('myconsultants')); 

    }
}
