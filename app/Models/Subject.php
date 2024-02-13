<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable=[
        'type',
        'name',
        'hrs'
    ];

    /*
    -track has many to many relationship in track table and they belong to track_subjects pivot table.
    -track_subjects (intermediate or pivot table) .
    -withPivot" use to access the pivot table betweem two tables.
    -one subject can have a one track only.
   
    public function track()
    {
        return $this->belongsToMany('App\Models\Track','track_subjects','subject_id','track_id')->withPivot('id');
    }
    */ 

   
}

