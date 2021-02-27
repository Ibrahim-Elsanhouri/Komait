<?php 


namespace App\Payment; 
use App\Course; 
use Illuminate\Http\Request;
use Carbon\Carbon;


class LmsPaymentService implements PaymentServiceInterface{
    protected $token = PaymentServiceInterface::token;
    protected $basURL = PaymentServiceInterface::basURL;

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
//$json  = json_decode((string)$response, true);
     //echo "json  json: $json '<br />'";
    
  //  $payment_url = $json["Data"]["ImageUrl"];
 //   dd($json);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
//dd($json);
return view('myfatooralms.execute' , compact('course'));
}
    }
    public function execute_payment($id){

    } 
    public function direct_payment(Request $request){

    }
}