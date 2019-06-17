<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/questions', 'QuestionController@index');
Route::get('/questions/{question_id}', 'QuestionController@show')->name('question.show');
// /questions/123
Route::get('/questions/test', 'QuestionController@test');
Route::get('/categories', 'CategoryController@index');
Route::get('/answers/{id}', 'AnswerController@show')->name('answer.show');
Route::post('/answers/{id}', 'AnswerController@vote');