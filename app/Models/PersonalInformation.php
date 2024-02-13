<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    protected $fillable=[
        'id',
        'lrn_or_id_no',
        'lastname',
        'firstname',
        'middlename',
        'suffix',
        'date_of_birth',
        'gender',
        'address',
        'contact_no',
        'photo',
        'person_type',
    ];

    //personal_informations table has one to one relationship in user_codes table.
    public function usercode(){
        return $this->hasOne('App\Models\UserCode');
    }

    //personal_informations table has one to many relationship in students  table(students who enrolled per school year and semester).
    public function students(){
        return $this->hasMany('App\Models\Student','personal_information_id','id');
    }
    
    //personal_informations table has one to many relationship in teachers  table(teacher who has a subject per school year and semester).
    public function teachers(){
        return $this->hasMany('App\Models\Teacher','personal_information_id','id');
    }


}
