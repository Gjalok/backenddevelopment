<?php

use App\Http\Controllers\QuizController;

// Other routes...

// Define a route for the home page
Route::get('/', [QuizController::class, 'index'])->name('index');

// Define a route for the subscribe form submission
Route::post('/subscribe', [QuizController::class, 'subscribe'])->name('subscribe');

Route::get('/quizzes/{quizId}', [QuizController::class, 'show'])->name('quiz.show');

Route::get('/', [QuizController::class, 'index']);


Route::get('/quiz', 'QuizController@createOrUpdate')->name('quiz.create');  

Route::get('/quiz/{id}', 'QuizController@createOrUpdate')->name('quiz.edit');  

Route::post('/quiz/{id?}', 'QuizController@createOrUpdate');

Route::get('/quiz/list', 'QuizController@list')->name('quiz.list');

