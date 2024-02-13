<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timer extends Model
{
    protected $fillable=[
        'id',
        'title',
        'date_started',
        'date_ended',
        
    ];

}
