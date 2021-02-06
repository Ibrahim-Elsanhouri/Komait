<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consultant; 
use App\Notifications\Message; 

use CRUDBooster; 
class ConsultantController extends Controller
{
    use Message; 
    public function __construct()
    {
      
      // $this->middleware('myauth');

          $this->middleware('myauth')->only('enrollment');

     //   $this->middleware('myauth')->except('myauth');
    }
    //
    public function create(){
      //  dd('test');
        return view('consultants.create'); 

    }
    public function show($id){
      $consultant = Consultant::find($id); 
      return view ('consultants.show' , compact('consultant')); 
    }
    public function store(Request $request){
     //   dd($request->all()); 
        Consultant::create($request->all()); 
        $this->admin_new_consultant(); 
        return back()->with('warning' , 'تم ارسال طلبك الى قسم الاستشارات بنجاح , سيتم ارسال العرض في اقرب وقت ⏳');
    }
    public function myconsultants(){
        $myconsultants = Consultant::where('cms_users_id' , CRUDBooster::myId())->get();
     //   dd($myconsultants);
     return view('consultants.myconsultants' , compact('myconsultants')); 

    }
}
