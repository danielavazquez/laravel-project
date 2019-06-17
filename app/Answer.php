<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{

    public function question()
    {
        return $this->belongsTo('App\Question');
    }

    public function votes()
    {
        return $this->hasMany('App\Vote');
    }

}

//Answer belongs to Question



// get all answers for question 1
// On SQL 
// SELECT `answers`.*
// FROM `answers`
// WHERE `question_id` = 1

// get the right question for an answer with question_id 1
// SELECT `question` .*
// FROM `question`
// WHERE `id` = 1

