<?php 


namespace App\Payment; 
use App\Notifications\Message;
use Illuminate\Http\Request;
use App\Contract; 
use App\Invoice; 
use Carbon\Carbon;

use CRUDBooster; 
class ConsultantPaymentService implements PaymentServiceInterface{

    use Message; 

    protected $token = PaymentServiceInterface::token;
    protected $basURL = PaymentServiceInterface::basURL;

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
        return $contract; 
       // $json  = json_decode((string)$response, true);
             //echo "json  json: $json '<br />'";
            
          //  $payment_url = $json["Data"]["ImageUrl"];
     //     dd($json);
     //   if ($err) {
      //    echo "cURL Error #:" . $err;
       // } else {
        //dd($json);
      // 
      //  }

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



public function direct_payment($request){


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
   
   
       }
      }
   






}