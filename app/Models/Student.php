<?php

//This is student is base on per school year and semester

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'id',
        'personal_information_id',
        'strand_id',
        'school_year',
        'semester',
        'grade_level',
        'section',
        'status',
    ];

    
    //students table is belong to personal_informations table and has one to many inverse relationship and has a foriegn key of personal_information_id.
    public function personal_information()
    {
        return $this->belongsTo('App\Models\PersonalInformation','personal_information_id');
    }

    //students(strand_id) table is belong to strand(id) table and has one to one inverse relationship and has a foriegn key of strand_id.
    public function strand()
    {
        return $this->belongsTo('App\Models\Strand','strand_id');
    }

    public function student_subject(){
        return $this->hasOne('App\Models\Student_Subject');
    }

    public function candidates(){
        return $this->hasMany('App\Models\Candidate','student_id','id');
    }

    public function votes(){
        return $this->hasMany('App\Models\Vote','student_id','id');
    }

     //check if the student is voted or not
     public static function count($student_id) {
        $vote=Vote::where('student_id','=',$student_id);
        return $vote->count();
    }
    


}
