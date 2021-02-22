<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification; 
use CRUDBooster; 
class NotificationController extends Controller
{
    //
 


     public function index()
    {
        return view('users.notifications');
    }
    public function user_notifications()
    {
      $notifications = Notification::where('id_cms_users' , CRUDBooster::myId())->orderBy('id', 'desc')->get();

        return datatables()->of($notifications)
            ->make(true);
    }


}
