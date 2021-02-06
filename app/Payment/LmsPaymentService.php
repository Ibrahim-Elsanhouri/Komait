<?php 


namespace App\Payment; 

class LmsPaymentService implements PaymentServiceInterface{
    protected $token = PaymentServiceInterface::token;
    protected $basURL = PaymentServiceInterface::basURL;

    public function initial_payment($id){
dd($this->basURL);
    }
    public function execute_payment($id){

    } 
    public function direct_payment(array $data){

    }
}