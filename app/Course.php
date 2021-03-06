<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use CRUDBooster; 
class Course extends Model
{
    //.


    protected $table="courses";


    public function invoiceslms()
    {
        return $this->hasMany('App\Invoicelms', 'courses_id');
    
    }
    public function lessons(){
        return $this->hasMany('App\Lesson' , 'courses_id'); 
    }
  //  public function user(){
    //    return $this->belongsTo('App\User' , 'cms_users_id'); 
   // }
    public function category(){
        return $this->belongsTo('App\Category' , 'categories_id'); 
    }
    public function scopePublished($query)
    {
        return $query->where('published',  1);
    }
    public function users()
{
    return $this->belongsToMany(User::class, 'enrollments', 'courses_id', 'cms_users_id');

}


}
