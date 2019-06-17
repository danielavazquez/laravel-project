<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Answer;
use App\Vote;
class AnswerController extends Controller
{
    //
    public function show($id)
    {
        // 11.
        $answer = Answer::find($id);
        return view('answers/show', compact('answer'));
    }
    public function vote($id)
    {
        // gets the request object
        $request = request();
 
        // finds an answer with `id` = 1
        $answer = Answer::find($id);
        
        // create new empty Vote object
        $vote = new \App\Vote;
        // set the answer_id of vote to be the same as the id of the voted answer
        // (practically specifying the relationship)
        $vote->answer_id = $answer->id;
        
        if ($request->input('up')) { // if there is some 'up' in the request ($_GET or $_POST)
            // set the value of `vote` property of the vote to 1
            $vote->vote = 1;
            // raises the total rating in the answer object by 1
            $answer->rating++; 
        } elseif($request->input('down')) { // if there is some 'down' in the request ($_GET or $_POST)
            // set the value of `vote` property of the vote to -1
            $vote->vote = -1;
            // lowers the total rating in the answer object by 1
            $answer->rating--; 
        }
        
        $vote->save(); // INSERT
        $answer->save(); // UPDATE
        
        // redirect to previous page
        return back();
    }
}