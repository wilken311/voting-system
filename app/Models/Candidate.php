<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
        protected $fillable=[
            'student_id',
            'position',
            'coc_message',
            'approval'

        ];
        
      public function student()
      {
          return $this->belongsTo('App\Models\Student','student_id');
      }
    
      public function votes(){
        return $this->hasMany('App\Models\Vote','candidate_id','id');
    }
    
}
