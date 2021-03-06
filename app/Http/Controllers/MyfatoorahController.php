<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract; 
use App\Course; 
use App\Invoice; 
use CRUDBooster; 
use Auth; 
use App\Notifications\Message; 

class MyfatoorahController extends Controller
{
  use Message; 

public $token= "Tfwjij9tbcHVD95LUQfsOtbfcEEkw1hkDGvUbWPs9CscSxZOttanv3olA6U6f84tBCXX93GpEqkaP_wfxEyNawiqZRb3Bmflyt5Iq5wUoMfWgyHwrAe1jcpvJP6xRq3FOeH5y9yXuiDaAILALa0hrgJH5Jom4wukj6msz20F96Dg7qBFoxO6tB62SRCnvBHe3R-cKTlyLxFBd23iU9czobEAnbgNXRy0PmqWNohXWaqjtLZKiYY-Z2ncleraDSG5uHJsC5hJBmeIoVaV4fh5Ks5zVEnumLmUKKQQt8EssDxXOPk4r3r1x8Q7tvpswBaDyvafevRSltSCa9w7eg6zxBcb8sAGWgfH4PDvw7gfusqowCRnjf7OD45iOegk2iYSrSeDGDZMpgtIAzYVpQDXb_xTmg95eTKOrfS9Ovk69O7YU-wuH4cfdbuDPTQEIxlariyyq_T8caf1Qpd_XKuOaasKTcAPEVUPiAzMtkrts1QnIdTy1DYZqJpRKJ8xtAr5GG60IwQh2U_-u7EryEGYxU_CUkZkmTauw2WhZka4M0TiB3abGUJGnhDDOZQW2p0cltVROqZmUz5qGG_LVGleHU3-DgA46TtK8lph_F9PdKre5xqXe6c5IYVTk4e7yXd6irMNx4D4g1LxuD8HL4sYQkegF2xHbbN8sFy4VSLErkb9770-0af9LT29kzkva5fERMV90w";     
public $basURL = "https://apitest.myfatoorah.com";
 
 public function initial_payment(Request $request, $id){

$service = sprintf("App\\Payment\\%sPaymentService" , ucfirst($request->service)); 

  $service = new $service; 


  $service->initial_payment($id); 
  if ($request->service == "Consultant"){

    $contract = Contract::find($id);
    return view('myfatoora.execute' , compact('contract'));

  }else{


    $course = Course::find($id);

    return view('myfatooralms.execute' , compact('course'));
  }
 }




 
public function execute_payment(Request $request , $id){

  $service = sprintf("App\\Payment\\%sPaymentService" , ucfirst($request->service)); 
  $service = new $service;
$service->execute_payment($id); 
  if ($request->service == "Consultant"){  
  $contract = Contract::find($id);
   $invoice = $contract->invoices()->latest()->first(); 
   $payment_url = $invoice->payment_url;
   $InvoiceId = $invoice->InvoiceId;

  //  dd($contract);
    return view('myfatoora.payment' , compact('contract' , 'payment_url','InvoiceId' , 'invoice')); 

  }else{
    $course = Course::find($id);
    $invoicelms = $course->invoiceslms()->latest()->where('cms_users_id' , CRUDBooster::myId())->first(); 
    $payment_url = $invoicelms->payment_url;
    $InvoiceId = $invoicelms->InvoiceId;
    return view('myfatooralms.payment' , compact('course' , 'payment_url','InvoiceId' , 'invoicelms')); 

  }
}



   public function direct_payment(Request $request){

    $service = sprintf("App\\Payment\\%sPaymentService" , ucfirst($request->service)); 
      $service = new $service; 
    
    
      $service->direct_payment($request); 

    if ($request->service == "Consultant"){

  

  
    //  dd($contract);
    return redirect('/myconsultants')->with('success' , 'تم استقبال الحوالة و تفعيل العقد بنجاح');
  
    }else{
   //   $course = Course::find($id);
  
      return redirect('/courses')->with('success' , ' تم الاشتراك في الدورة بنجاح');
  
    }
    }
   }





