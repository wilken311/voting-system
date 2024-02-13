<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable=[
        'student_id',
        'candidate_id',
    ];

    
    public function student()
    {
        return $this->belongsTo('App\Models\Student','student_id');
    }

    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate','candidate_id');
    }


    //get the no. of votes
    public static function count($candidate_id) {
        $vote=Vote::where('candidate_id','=',$candidate_id);
        return $vote->count();
    }

}
