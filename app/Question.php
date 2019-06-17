<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    public function answers ()
    {
        return $this->hasMany('App\Answer','question_id','id');

    }
}

// Question has many answers , represented as id and question_id 
