<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use Notifiable;
    protected $table="cms_users"; 
    public $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses(){
        return $this->belongsToMany(Course::class, 'enrollments', 'cms_users_id', 'courses_id');
    }

    public function verifyUser(){
        return $this->hasOne('App\UserVerify' , 'cms_users_id'); 
    }

    public function consultants(){
        return $this->hasMany('App\Consultant');
    }
    public function notifications(){
        return $this->hasMany('App\Notification' , 'id_cms_users');
    }
    public function notes(){
        return $this->hasMany('App\Note');
    }
   


}
