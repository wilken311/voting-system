<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'user_code_id','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //users table is belong to user_codes table and has one to one inverse relationship and has a foriegn key of user_code_id.
    public function usercode()
    {
        return $this->belongsTo('App\Models\UserCode','user_code_id');
    }

    


   
}
