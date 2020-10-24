<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact; 
use Alert; 
use CRUDBooster;
class ContactController extends Controller
{
    //
    public function index(){
        return view('contact'); 
    }
    public function store(Request $request){
        $contact = new Contact(); 
        $contact->name = $request->name; 
        $contact->message = $request->message; 
        $contact->email = $request->email; 
        $contact->save(); 

        $config['content'] = "تم ارسال استفسار من قبل العميل";
        $config['to'] = CRUDBooster::adminPath('/');
        $config['id_cms_users'] = [1]; //This is an array of id users
        CRUDBooster::sendNotification($config);
   
return back()->with('warning' , '💖 تم ارسال طلبك بنجاح سيقوم فريقنا بالرد عليك في اسرع وقت '); 

    }
}
