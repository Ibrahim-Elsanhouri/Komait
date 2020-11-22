<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Offer;
use App\Course; 

class PaylinkController extends Controller
{
    //
    public function course_post_login($id){
      $course = Course::find($id);
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://restapi.paylink.sa/api/auth",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>"{\r\n    \"apiId\":\"APP_ID_1596354703\",\r\n    \"secretKey\":\"0bc7b125-598a-3f3a-8b8a-cc6e79ed8167\",\r\n    \"persistToken\" : false\r\n  }",
    CURLOPT_HTTPHEADER => array(
      "Content-Type: application/json"
    ),
  ));
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
  $response = curl_exec($curl);
  
  curl_close($curl);
 // echo $response;

     $obj = json_decode($response);
     $id_token = $obj->id_token; 
    // dd($obj->id_token);
    return view('paylinks.payform' , compact('id_token' , 'offer')); 



}

    public function post_login($id){
      $offer = Offer::find($id);
    //  $course = Course::find($id); 
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://restapi.paylink.sa/api/auth",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>"{\r\n    \"apiId\":\"APP_ID_1596354703\",\r\n    \"secretKey\":\"0bc7b125-598a-3f3a-8b8a-cc6e79ed8167\",\r\n    \"persistToken\" : false\r\n  }",
    CURLOPT_HTTPHEADER => array(
      "Content-Type: application/json"
    ),
  ));
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
  $response = curl_exec($curl);
  
  curl_close($curl);
 // echo $response;

     $obj = json_decode($response);
     $id_token = $obj->id_token; 
    // dd($obj->id_token);
    return view('courses.payment' , compact('id_token' , 'course')); 



}


public function create_invoice(Request $request){
//  dd($request->all()); 
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://restapi.paylink.sa/api/addInvoice",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\r\n    \"amount\" : \"$request->cost\",\r\n    \"orderNumber\":\"$request->id\",\r\n    \"callBackUrl\":\"https://www.example.com\",\r\n    \"clientName\":\"$request->name\",\r\n    \"clientMobile\":\"$request->mobile\",\r\n    \"note\":\"Please call us after payment to redeem code\",\r\n    \"clientEmail\":\"$request->email\"\r\n  }",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer $request->id_token",
    "Content-Type: application/json"
  ),
));
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
$response = curl_exec($curl);

curl_close($curl);
//echo $response;
$obj = json_decode($response);
return redirect($obj->url);
}

public function create_course_invoice(Request $request){
  //  dd($request->all()); 
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://restapi.paylink.sa/api/addInvoice",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>"{\r\n    \"amount\" : \"$request->price\",\r\n    \"orderNumber\":\"$request->id\",\r\n    \"callBackUrl\":\"https://www.example.com\",\r\n    \"clientName\":\"$request->name\",\r\n    \"clientMobile\":\"$request->mobile\",\r\n    \"note\":\"Please call us after payment to redeem code\",\r\n    \"clientEmail\":\"$request->email\"\r\n  }",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer $request->id_token",
      "Content-Type: application/json"
    ),
  ));
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
  $response = curl_exec($curl);
  
  curl_close($curl);
  //echo $response;
  $obj = json_decode($response);
  return redirect($obj->url);
  }
}