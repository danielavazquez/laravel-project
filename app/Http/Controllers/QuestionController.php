<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Question;
use App\Answer;
class QuestionController extends Controller
{
    //
    public function index()
    {
        $questions = Question::orderBy('created_at', 'desc')->get();
        return view('questions/index', compact('questions')); // ['questions' => $questions]
    }
    public function show($question_id)
    {
        // $question = Question::where('id', $question_id)
        //     ->first();
        $question = Question::find($question_id); // equivalent to the line above because `id` is the PK
        return view('questions/show', compact('question'));
    }
    /**
     * test fluent query builder
     */
    public function test()
    {   
        // DELETE query
        $question = DB::table('questions')
            ->where('id', 3)
            ->delete();
        return;-
        // INSERT query
        DB::table('questions')->insert([
            'user_id' => 1,
            'title' => 'Why is everyone asleep?',
            'text' => 'It is not even noon.'
        ]);
        return;
        // SELECT  ... LIMIT 1 query
        $questions = DB::table('questions')
            ->where('user_id', 1)
            ->orderBy('created_at', 'desc')
            ->first();
        // foreach ($questions as $question) {
        //     dd($question);
        // }
        dd($questions);
        $query_object = DB::table('questions')
            ->limit(10)
            ->orderBy('created_at')
            ->where('user_id', 1)
            ->orderBy('updated_at');
            
        // $query_object = $query_object->where('user_id', 1);
        $results = $query_object->get();
        dd($results);
        // SELECT *
        // FROM `questions`
        // WHERE `user_id` = 1
        // ORDER BY `created_at`
    }
}