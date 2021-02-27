<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consultant; 
use App\Key; 
use App\Entry; 

use App\Notifications\Message; 

use CRUDBooster; 
class ConsultantController extends Controller
{
    use Message; 
    public function __construct()
    {
      
      // $this->middleware('myauth');

          $this->middleware('myauth');

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
// insert conultant
     $consultant =    Consultant::create($request->all()); 
      // Insert Entry Point
        if($request->value != '' ){
          foreach ( $request->value as $key => $v){
              $data = array (
              'consultants_id' => $consultant->id , 
              'keys_id' => $request->keys_id [$key]  , 
              'value'=>  $v);
              Entry::insert($data);

          }
      }


        






// Send Notification From the Trait
        $this->admin_new_consultant(); 
        return back()->with('warning' , 'تم ارسال طلبك الى قسم الاستشارات بنجاح , سيتم ارسال العرض في اقرب وقت ⏳');
    }

    public function myconsultants(){
        $myconsultants = Consultant::where('cms_users_id' , CRUDBooster::myId())->orderBy('id' , 'desc')->paginate(10);
     //   dd($myconsultants);
     return view('consultants.myconsultants' , compact('myconsultants')); 

    }

    public function GetYypeKeys($id){
      $keys = Key::where("types_id",$id)
        ->pluck("name","id");

        return json_encode($keys);

    }

  
}
