<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Question;
use App\Answer;


class QuestionController extends Controller
{
    public function test()
    {
        $query_object = DB::table('questions')
            ->limit(10)
            ->orderBy('created_at')
            ->where('user id' , 1)
            ->orderBy('updated_at')
            ->get();
            
    }

    public function index()
    {
        $results = Question::orderBy('created_at', 'desc')->get();
        dd($results);
        return "This is the list of questions";

    }

    public function show()
    {
        $question = Question::find(1);
        
        dd($question->answers);
        return "This is a detail of a question";
    }

}
