<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification; 
use CRUDBooster; 
class NotificationController extends Controller
{
    //
    public function index(){
        $notifications = Notification::where('id_cms_users' , CRUDBooster::myId())->orderBy('id', 'desc')->get();
      //  dd($notifications);
        return view('users.notifications' , compact('notifications')); 
    }
}
