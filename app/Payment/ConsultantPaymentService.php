<?php 


namespace App\Payment; 

class ConsultantPaymentService implements PaymentServiceInterface{

    
    protected $token = PaymentServiceInterface::token;
    protected $basURL = PaymentServiceInterface::basURL;

    public function initial_payment($id){


    }
    public function execute_payment($id){

    } 
    public function direct_payment(array $data){

    }
}