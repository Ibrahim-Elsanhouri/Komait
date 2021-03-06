<?php 


namespace App\Payment; 
use App\Course; 
use App\Invoicelms;
use Illuminate\Http\Request;
use Carbon\Carbon;
use CRUDBooster; 


class LmsPaymentService implements PaymentServiceInterface{

    protected $token = PaymentServiceInterface::token;
    protected $basURL = PaymentServiceInterface::basURL;

    // Initial Method
    
    public function initial_payment($id){


      $course = Course::find($id);

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "$this->basURL/v2/InitiatePayment",
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"InvoiceAmount\": $course->price,\"CurrencyIso\": \"SAR\"}",
  CURLOPT_HTTPHEADER => array("Authorization: Bearer $this->token","Content-Type: application/json"),
));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);



if ($err) {
  echo "cURL Error #:" . $err;
}

    }


    // Execute Method
    public function execute_payment($id){

      $course = Course::find($id);
      $name = CRUDBooster::myName();
      $mobile = CRUDBooster::myMobile();
      $email = CRUDBooster::myEmail();

        $curl = curl_init();
      
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "$this->basURL/v2/ExecutePayment",
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "{\"PaymentMethodId\":\"2\",\"CustomerName\": \"$name\",\"DisplayCurrencyIso\": \"KWD\", \"MobileCountryCode\":\"+966\",\"CustomerMobile\": \"$mobile\",\"CustomerEmail\": \"$email\",\"InvoiceValue\":  $course->price,\"CallBackUrl\": \"https://google.com\",\"ErrorUrl\": \"https://google.com\",\"Language\": \"en\",\"CustomerReference\" :\"ref 1\",\"CustomerCivilId\":12345678,\"UserDefinedField\": \"Custom field\",\"ExpireDate\": \"\",\"CustomerAddress\" :{\"Block\":\"\",\"Street\":\"\",\"HouseBuildingNo\":\"\",\"Address\":\"\",\"AddressInstructions\":\"\"},\"InvoiceItems\": [{\"ItemName\": \"Product 01\",\"Quantity\": 1,\"UnitPrice\": $course->price}]}",
      
      CURLOPT_HTTPHEADER => array("Authorization: Bearer $this->token","Content-Type: application/json"),
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
 //   dd($response); 
    $json  = json_decode((string)$response, true);
    //echo "json  json: $json '<br />'";
    //dd($json); 
    $payment_url = $json["Data"]["PaymentURL"];
    $InvoiceId = $json["Data"]["InvoiceId"];

    // Store the Invoice in the system
    
    $invoicelms = new Invoicelms(); 
    $invoicelms->InvoiceId = $InvoiceId;
    $invoicelms->PaymentURL = $payment_url;
    $invoicelms->courses_id = $id; 
    $invoicelms->cms_users_id = CRUDBooster::myId(); 
    $invoicelms->amount =   $course->price; 
    $invoicelms->save();

 




    } 



    // Direct Method
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
            
             $invoicelms = Invoicelms::find($request->invoices_id);
   
             
             $invoicelms->paid = 1; 


             $invoicelms->save(); 
    
           //  dd($invoicelms , $invoicelms->course->id , $invoicelms->course); 
             

             $invoicelms->course->users()->attach(CRUDBooster::myId());

            
    
    
           
       
           }
          }

}