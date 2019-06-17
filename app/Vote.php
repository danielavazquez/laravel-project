<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{


    
    public function answer()
    {
    return $this->belongsTo('App\Answer');
    }   

}

// a vote can only have one answer so it is singular

