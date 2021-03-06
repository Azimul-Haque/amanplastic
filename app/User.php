<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function blogs(){
        return $this->hasMany('App\Blog');
    }

    public function payments() {
      return $this->hasMany('App\Payment', 'member_id', 'member_id');
    }

    public function payments2() {
      return $this->hasMany('App\Payment', 'payer_id', 'member_id');
    }

    public function passwordresetsms() {
      return $this->hasMany('App\Passwordresetsms');
    }

    protected $fillable = [
        'name', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
}
