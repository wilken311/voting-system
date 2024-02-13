<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCode extends Model
{
    protected $fillable=[
        'code'
    ];

    //user_codes has many to many relationship in roles table and they belong to role_user_code pivot table.
    //role_user_code (intermediate table or pivot table)
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role','role_user_code','user_code_id','role_id')->withPivot('user_code_id','role_id');
    }


    //user_codes table is belong to personal_informations table and has one to one inverse relationship and has a foriegn key of personal_information_id.
    public function personal_information()
    {
        return $this->belongsTo('App\Models\PersonalInformation','personal_information_id');
    }

    //user_codes table has one to one relationship in users table.
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

        /**
     * Check if the usercode has a role
     *
     * @param string $role
     * @return boolean
     */
    public function hasRole($role): bool
    {
        return $this->roles->where('name', $role)->isNotEmpty();
    }


    /**
     * Check if the usercode has role admin
     *
     * @return boolean
     */
    public function isAdmin(): bool
    {
        return $this->hasRole(Role::ROLE_ADMIN);
    }

    /**
     * Check if the usercode has role teacher
     *
     * @return boolean
     */
    public function isTeacher(): bool
    {
        return $this->hasRole(Role::ROLE_TEACHER);
    }

    
    /**
     * Check if the usercode has role student
     *
     * @return boolean
     */
    public function isStudent(): bool
    {
        return $this->hasRole(Role::ROLE_STUDENT);
    }


}
