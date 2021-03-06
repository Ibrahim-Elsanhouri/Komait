<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoicelms extends Model
{
    //
    protected $table ="invoiceslms";

  //  public function course(){
    //    return $this->belongsTo('App\Course' , 'courses_id');
   // }
      

public function course()
{
    return $this->belongsTo(Course::class, 'courses_id');
}
   
    public function user(){
        return $this->belongsTo('App\User' , 'cms_users_id');
    }
}
