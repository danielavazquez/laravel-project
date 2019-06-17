<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class AnswerController extends Controller
{
    public function show($id)
    {
        //11
        $answer = Answer::findOrFail($id);

        return view('answers/show', compact('answer')); //return answers show and pass the variable answer inside
    }

    public function vote()
    {
        $request = request();  //gets the request object
        $answer = Answer::find(1); //finds an answer with `id` = 1
        $vote = new \App\Vote; //creates new empty Vote object
        $vote->answer_id = $answer->id; //set the answer_id of vote to be the same as the id of the voted answer (specifying the relationship)


        if ($request->input('up')) { //if there is some'up' in the request ($_GET or $_POST)

            $vote->vote = 1; //set the value of `vote` property of the vote to 1
            $answer->rating++; //raises the number of ratings in the answer object by 1

        } elseif($request->input('down')) { //if there is some'down' in the request ($_GET or $_POST)

            $vote->vote = -1; //set the value of `vote` property of the vote to -1
            $answer->rating--; //lowers the total rating in the answer object by 1
        }
            $vote->save(); //does an INSERT it is a newly created object and saves it onto the database
            $answer->save(); //does an UPDATE
            return back(); //redirect to previous page, we got here with post and redirect with get
    }
}
