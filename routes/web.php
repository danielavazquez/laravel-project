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

Route::get('/questions','QuestionController@index');
Route::get('/questions/{id}','QuestionController@show')->name('question.show');


Route::get('/questions/test','QuestionController@test');

Route::get('/categories','CategoryController@index');

Route::get('/answers/{id}','AnswerController@show')->name('answer.show');
Route::post('/answers/{id}','AnswerController@vote');



// url('questions/1');
// action('QuestionController@index' ,1);
// route('question.show');
//These are the same way to get to links with {id} but from bottom to top it is better





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
