<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes

class QuestionController extends Controller
{

// TEST FLUENT QUERY BUILDER
    public function test()
    {
        $query_object = DB::table('questions')
            ->limit(10)
            ->orderBy('created_at')
            ->where('user id' , 1)

            ->orderBy('updated_at')
            ->get();
            
        // $query_object = $query_object->where('user_id',1);

// FROM 'questions`
// WHERE `user_id` = 1
// ORDER BY `created_at`
    }

    public function index()
    {
<<<<<<< Updated upstream
        $results = DB::table('questions')->orderBy('created_at', 'desc')->get();
        dd($results);
        return "This is the list of questions";
=======
        $results = DB::table('questions')
        ->orderBy('created_at','desc')
        ->get();
        dd($results);
        return 'This is the list of questions';
>>>>>>> Stashed changes
    }

    public function show()
    {
<<<<<<< Updated upstream
        // $result = DB::table('questions')->where('id', 1)->first();
        // dd($result);

        $result = DB::table('answers')->orderBy('created_at', 'asc')->where('question_id', 1)->get();
        dd($result);
        return "This is a detail of a question";
=======
        // $results = DB::table('questions')
        // ->where('id' , 1)
        // ->get();  
        // dd($results);

        $results = DB::table('answers')
        ->select('question_id');
        dd($results);
>>>>>>> Stashed changes
    }

}
