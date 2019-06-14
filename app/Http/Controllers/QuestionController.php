<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Question;
use App\Answer;


class QuestionController extends Controller
{

// TEST FLUENT QUERY BUILDER
    public function test()
    {
        //Delete Query
        $question = DB::table('questions')
        ->where('id',3)
        ->delete();

        // $query_object = DB::table('questions')
        //     ->limit(10)
        //     ->orderBy('created_at')
        //     ->where('user id' , 1)

        //     ->orderBy('updated_at')
        //     ->get();
            
        // $query_object = $query_object->where('user_id',1);

        // FROM 'questions`
        // WHERE `user_id` = 1
        // ORDER BY `created_at`
    }

    public function index()
    {

        // $results = DB::table('questions')->orderBy('created_at', 'desc')->get();
        // dd($results);

        //eloquent code
        $all_questions = Question::orderBy('created_at','desc')->get();
        return "This is the list of questions";

        return view('questions.index', compact('questions'));

    }

    public function show()
    {
        //eloquent code
        $question = Question::where('id',1)
        ->first();
        $question = Question::find(1); //equivalent to the line above because 'id' is the PK

        dd($question->answers); //we want answers to this question

        return view('questions.show', compact('questions'));

        // $result = DB::table('questions')->where('id', 1)->first();
        // dd($result);

        // $result = DB::table('answers')->orderBy('created_at', 'asc')->where('question_id', 1)->get();
        // dd($result);
        return "This is a detail of a question";

    }

}
