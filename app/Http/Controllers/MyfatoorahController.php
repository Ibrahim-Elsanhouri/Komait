<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract; 
use App\Invoice; 
use CRUDBooster; 
use Auth; 
use Carbon\Carbon;
use App\Notifications\Message; 

class MyfatoorahController extends Controller
{
  use Message; 

public $token= "Tfwjij9tbcHVD95LUQfsOtbfcEEkw1hkDGvUbWPs9CscSxZOttanv3olA6U6f84tBCXX93GpEqkaP_wfxEyNawiqZRb3Bmflyt5Iq5wUoMfWgyHwrAe1jcpvJP6xRq3FOeH5y9yXuiDaAILALa0hrgJH5Jom4wukj6msz20F96Dg7qBFoxO6tB62SRCnvBHe3R-cKTlyLxFBd23iU9czobEAnbgNXRy0PmqWNohXWaqjtLZKiYY-Z2ncleraDSG5uHJsC5hJBmeIoVaV4fh5Ks5zVEnumLmUKKQQt8EssDxXOPk4r3r1x8Q7tvpswBaDyvafevRSltSCa9w7eg6zxBcb8sAGWgfH4PDvw7gfusqowCRnjf7OD45iOegk2iYSrSeDGDZMpgtIAzYVpQDXb_xTmg95eTKOrfS9Ovk69O7YU-wuH4cfdbuDPTQEIxlariyyq_T8caf1Qpd_XKuOaasKTcAPEVUPiAzMtkrts1QnIdTy1DYZqJpRKJ8xtAr5GG60IwQh2U_-u7EryEGYxU_CUkZkmTauw2WhZka4M0TiB3abGUJGnhDDOZQW2p0cltVROqZmUz5qGG_LVGleHU3-DgA46TtK8lph_F9PdKre5xqXe6c5IYVTk4e7yXd6irMNx4D4g1LxuD8HL4sYQkegF2xHbbN8sFy4VSLErkb9770-0af9LT29kzkva5fERMV90w"; 
    
   public $basURL = "https://apitest.myfatoorah.com";
   //https://apitest.myfatoorah.com/v2/InitiatePaymen



public function initial_payment($id){
  $contract = Contract::find($id);
$InvoiceAmount = ($contract->offer->cost + $contract->offer->cost * 0.15) / 2;
    ####### Initiate Payment ######
$basURL = "https://apitest.myfatoorah.com";


$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "$this->basURL/v2/InitiatePayment",
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"InvoiceAmount\": $InvoiceAmount,\"CurrencyIso\": \"SAR\"}",
  CURLOPT_HTTPHEADER => array("Authorization: Bearer $this->token","Content-Type: application/json"),
));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
//$json  = json_decode((string)$response, true);
     //echo "json  json: $json '<br />'";
    
  //  $payment_url = $json["Data"]["ImageUrl"];
 //   dd($json);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
//dd($json);
return view('myfatoora.execute' , compact('contract'));
}
}




public function execute_payment($id){

  $contract = Contract::find($id);
  $name = CRUDBooster::myName();
  $mobile = CRUDBooster::myMobile();
  $email = CRUDBooster::myEmail();
    $InvoiceAmount = ($contract->offer->cost + $contract->offer->cost * 0.15) / $contract->offer->batches;
    $curl = curl_init();
  

curl_setopt_array($curl, array(
  CURLOPT_URL => "$this->basURL/v2/ExecutePayment",
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"PaymentMethodId\":\"2\",\"CustomerName\": \"$name\",\"DisplayCurrencyIso\": \"KWD\", \"MobileCountryCode\":\"+966\",\"CustomerMobile\": \"$mobile\",\"CustomerEmail\": \"$email\",\"InvoiceValue\":  $InvoiceAmount,\"CallBackUrl\": \"https://google.com\",\"ErrorUrl\": \"https://google.com\",\"Language\": \"en\",\"CustomerReference\" :\"ref 1\",\"CustomerCivilId\":12345678,\"UserDefinedField\": \"Custom field\",\"ExpireDate\": \"\",\"CustomerAddress\" :{\"Block\":\"\",\"Street\":\"\",\"HouseBuildingNo\":\"\",\"Address\":\"\",\"AddressInstructions\":\"\"},\"InvoiceItems\": [{\"ItemName\": \"Product 01\",\"Quantity\": 1,\"UnitPrice\": $InvoiceAmount}]}",
  
  CURLOPT_HTTPHEADER => array("Authorization: Bearer $this->token","Content-Type: application/json"),
));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$json  = json_decode((string)$response, true);
//echo "json  json: $json '<br />'";
//dd($json); 
$payment_url = $json["Data"]["PaymentURL"];
$InvoiceId = $json["Data"]["InvoiceId"];
// Store the Invoice in the system

$invoice = new Invoice(); 
$invoice->InvoiceId = $InvoiceId;
$invoice->PaymentURL = $payment_url;
$invoice->contracts_id = $id; 
//dd($InvoiceAmount);
$invoice->amount =   $InvoiceAmount; 
$invoice->save();


//dd($json);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
return view('myfatoora.payment' , compact('contract' , 'payment_url','InvoiceId' , 'invoice')); 
  //echo "$response '<br />'";

}
}

   public function direct_payment(Request $request){
 //$contract = Contract::find($id);
 $name = CRUDBooster::myName();
 $mobile = CRUDBooster::myMobile();
 $email = CRUDBooster::myEmail();

 $Number = $request->Number;
 $expiryMonth = $request->expiryMonth; 
 $expiryYear = $request->expiryYear; 
 $securityCode = $request->securityCode; 
 $payment_url = $request->payment_url; 
    
        # after getting the payment url call it as a post API and pass card info to it
        # if you saved the card info before you can pass the token for the api
        
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "$payment_url",
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "{\"paymentType\": \"card\",\"card\": {\"Number\":\"$Number\",\"expiryMonth\":\"$expiryMonth\",\"expiryYear\":\"$expiryYear\",\"securityCode\":\"$securityCode\"},\"saveToken\": false}",
      CURLOPT_HTTPHEADER => array("Authorization: Bearer $this->token","Content-Type: application/json"),
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
   //  dd($response);
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      // change the invoice status to paid
      $invoice = Invoice::find($request->invoices_id); 
      $invoice->paid = 1; 
      $invoice->save(); 
      // change the Contract status to confirm
      $contract = Contract::find($request->contracts_id); 
      $contract->confirmed = 1; 
      $contract->confirmed_at = Carbon::now()->toDateTimeString();
      $contract->save(); 
// change consultant hals 

$consultant =  $contract->offer->consultant; 
$consultant->halas_id = 5; 
$consultant->save();

$this->admin_new_payment(); 

     return redirect('/myconsultants')->with('success' , 'تم استقبال الحوالة و تفعيل العقد بنجاح');
    }
   }

}
