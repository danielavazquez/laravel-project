<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class QuestionController extends Controller
{
    public function index()
    {
        $results = DB::table('questions')->orderBy('created_at', 'desc')->get();
        dd($results);
        return "This is the list of questions";
    }

    public function show()
    {
        // $result = DB::table('questions')->where('id', 1)->first();
        // dd($result);

        $result = DB::table('answers')->orderBy('created_at', 'asc')->where('question_id', 1)->get();
        dd($result);
        return "This is a detail of a question";
    }

}
