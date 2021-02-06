<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\VerificationMail;
use App\User; 
use App\UserVerify; 
use App\Enrollment;
use CRUDBooster;

class UserController extends Controller

{
    //

public function getRegister(){
    return view('register');
}

    public function postRegister(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:cms_users',
            'mobile' => 'required|unique:cms_users',
            'password' => 'required|min:6',

        ]);
        $user = new User();
        $user->name = $request->input('name'); 
        $user->email = $request->input('email'); 
        $user->password =  bcrypt($request->input('password')); 

      //  $user->id_cms_privileges = $request->input('id_cms_privileges'); 

        $user->mobile = $request->input('mobile'); 
        $user->id_cms_privileges = 2; 
        $user->save(); 
    //    $hhh = $user->mobile;
        
        $verifyUser = new UserVerify(); 
        $verifyUser->cms_users_id = $user->id; 
        $verifyUser->token = str_random(50);
        $verifyUser->save(); 
   
\Mail::to($user->email)->send(new \App\Mail\VerificationMail($user));


    
return redirect('/login')->with('info' , '📧 تم التسجيل بنجاح 👍 , الرجاء تفعيل حسابك من البريد الالكتروني ');


    }
   
    public function verifyEmail($token){
        $verifyUser = UserVerify::where('token' , $token)->firstOrFail(); 
        $user = $verifyUser->user; 
        if ($user->verified){
          
            return  redirect('/login')->with('danger' , 'هذا الحساب مغعل مسبقا ✌'); 

        } else {

            $verifyUser->user->verified = 1; 
            $verifyUser->user->save(); 
        
            return redirect('/login')->with('warning' , 'تم تفعيل الحساب , يسعدنا تواجدك 💖'); 
        }}

        public function edit(){
            return view('users.edit');
        }
        public function profile(){
            return view('users.profile');
        }
        public function myenrollments(){
            $enrollments  = Enrollment::where('cms_users_id' , CRUDBooster::myId())->get();
        //    dd($user->notes());
      //  dd($user); 
    //  dd($user->consultants); 
//dd($enrollments);
            return view('users.enrollments' , compact('enrollments'));
    
        }

}
