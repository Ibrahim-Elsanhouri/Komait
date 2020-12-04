<?php

namespace App\Notifications;
use CRUDBooster; 

trait Message 
{
    //to admin when client submit a new consultant

    public function admin_new_consultant(){
        $config['content'] = " ✉ تم ارسال استشارة جديدة من قبل عميل";
$config['to'] = CRUDBooster::adminPath('consultants');
$config['id_cms_users'] = [1]; //This is an array of id users
CRUDBooster::sendNotification($config);
    }

     // to consultant when admin assign a consultant 

  //  public function conultant_new_request($id){
    //    $config['content'] = "تم ارسال طلب استشارة و ارساله لك من قبل الادارة";
//$config['to'] = CRUDBooster::adminPath('consultants');
//$config['id_cms_users'] = [$id]; //This is an array of id users
//CRUDBooster::sendNotification($config);
  //  }

    // to admin when consultant send offer

    public function admin_new_offer(){
        $config['content'] = "تم ارسال عرض من احد المتشارين";
$config['to'] = CRUDBooster::adminPath('consultants');
$config['id_cms_users'] = [1]; //This is an array of id users
CRUDBooster::sendNotification($config);
    }
 
 // to client when he receive offer



    public function client_receive_offer($id){
        $config['content'] = "تم ارسال عرض من  الادارة";
$config['to'] = CRUDBooster::adminPath('consultants');
$config['id_cms_users'] = [$id]; //This is an array of id users
CRUDBooster::sendNotification($config);
    }
}