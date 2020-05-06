<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'QuizController@index')->name('quiz');
Route::get('/{quiz}/{questionId}', 'QuizController@take')->name('take_quiz');
Route::post('/{quiz}/{questionId}', 'QuizController@postTake')->name('take_quiz_post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
