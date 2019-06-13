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
Route::get('/questions/1','QuestionController@show');

<<<<<<< Updated upstream
Route::get('/questions/test','QuestionController@test');

Route::get('/categories','CategoryController@index');


=======
// test fluent query builder
Route::get('/questions/test','QuestionController@test');

//Morning workout day34 categories table
Route::get('/categories','CategoryController@index');
>>>>>>> Stashed changes
