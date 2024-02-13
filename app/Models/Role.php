<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ROLE_ADMIN = 'Administrator';
    const ROLE_TEACHER = 'Teacher';
    const ROLE_STUDENT = 'Student';

    protected $fillable=[
        'name'
    ];

    //role has many to many relationship in usercode table and they belong to role_user_code pivot table.
    public function usercode()
    {
        return $this->belongsToMany('App\Models\UserCode');
    }

}
