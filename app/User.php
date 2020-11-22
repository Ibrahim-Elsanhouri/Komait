<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Instructor; 
class User extends Authenticatable
{
    use Notifiable;
    protected $table="cms_users"; 

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


    public function verifyUser(){
        return $this->hasOne('App\UserVerify' , 'cms_users_id'); 
    }
    public function instructor(){
        return $this->hasOne('App\Instructor' , 'cms_users_id'); 
    }
    public function consultants(){
        return $this->hasMany('App\Consultant');
    }
    public function notes(){
        return $this->hasMany('App\Note');
    }
    public function courses(){
        return $this->belongsToMany('App\Course', 'enrollments', 'cms_users_id', 'courses_id');
    }


}
