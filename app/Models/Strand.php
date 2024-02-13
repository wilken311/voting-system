<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Strand extends Model
{
    /*
    -tracks has many to many relationship in subjects table and they belong to track_subjects pivot table.
    -track_subjects (intermediate or pivot table).
    -"withPivot" use to access the pivot table betweem two tables..
    -one track can have many subjects.
   
    public function subjects()
    {
        return $this->belongsToMany('App\Models\Subject','track_strand_subjects','track_subject_id','strand_id')->withPivot('id','created_at');
    }
    */

    
}
