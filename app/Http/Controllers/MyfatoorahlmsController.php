<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course; 
class MyfatoorahlmsController extends Controller
{
    //
    public $token= "Tfwjij9tbcHVD95LUQfsOtbfcEEkw1hkDGvUbWPs9CscSxZOttanv3olA6U6f84tBCXX93GpEqkaP_wfxEyNawiqZRb3Bmflyt5Iq5wUoMfWgyHwrAe1jcpvJP6xRq3FOeH5y9yXuiDaAILALa0hrgJH5Jom4wukj6msz20F96Dg7qBFoxO6tB62SRCnvBHe3R-cKTlyLxFBd23iU9czobEAnbgNXRy0PmqWNohXWaqjtLZKiYY-Z2ncleraDSG5uHJsC5hJBmeIoVaV4fh5Ks5zVEnumLmUKKQQt8EssDxXOPk4r3r1x8Q7tvpswBaDyvafevRSltSCa9w7eg6zxBcb8sAGWgfH4PDvw7gfusqowCRnjf7OD45iOegk2iYSrSeDGDZMpgtIAzYVpQDXb_xTmg95eTKOrfS9Ovk69O7YU-wuH4cfdbuDPTQEIxlariyyq_T8caf1Qpd_XKuOaasKTcAPEVUPiAzMtkrts1QnIdTy1DYZqJpRKJ8xtAr5GG60IwQh2U_-u7EryEGYxU_CUkZkmTauw2WhZka4M0TiB3abGUJGnhDDOZQW2p0cltVROqZmUz5qGG_LVGleHU3-DgA46TtK8lph_F9PdKre5xqXe6c5IYVTk4e7yXd6irMNx4D4g1LxuD8HL4sYQkegF2xHbbN8sFy4VSLErkb9770-0af9LT29kzkva5fERMV90w"; 
    
    public $basURL = "https://apitest.myfatoorah.com";


    public function initial_payment($id){
        $course = Contract::find($id);
      //$InvoiceAmount = ($contract->offer->cost + $contract->offer->cost * 0.15) / 2;
          ####### Initiate Payment ######
      $basURL = "https://apitest.myfatoorah.com";
      
      
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












}

