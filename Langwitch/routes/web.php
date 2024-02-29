<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\PretestController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('home');
});

Route::get('/course', function () {
    return view('course');
});

Route::get('/pretest', [PretestController::class, 'pretest']);

// sidebar linker

Route::get('/review', function () {
    return view('review');
});
Route::get('/review', [UserController::class, 'review']);

// review linker

Route::get('/videocourse', function () {
    return view('videocourse');
});

Route::get('/pptcourse', function () {
    return view('pptcourse');
});

Route::get('/homecourse', function () {
    return view('homecourse');
});
Route::get('/homecourse', [UserController::class, 'homecourse']);

// end of review linker

Route::get('/papanskor', function () {
    return view('papanskor');
});

Route::get('/profile', [UserController::class, 'profile']);

Route::get('/terjemahan', function () {
    return view('translate');
});
// end of sidebar linker


// course linker

Route::get('/testcoursefirst', function () {
    return view('testcoursefirst');
});

// end of course linker

Route::get('/login', [UserController::class, 'login']);
Route::post('/login-success', [UserController::class, 'login_user'])->name('login-success');

Route::get('/register', [UserController::class, 'register']);
Route::post('/register-success', [UserController::class, 'register_user'])->name('register-success');

Route::get('/logout-success', [UserController::class, 'logout_user'])->name('logout_success');

Route::get('papanskor', [LeaderboardController::class, 'show']);

Route::get('diskusi', [DiscussionController::class, 'showtext']);

Route::get('/diskusishow', [DiscussionController::class, 'DiscussionShow'])->name('diskusi-show');

Route::post('/diskusistore', [DiscussionController::class, 'store'])->name('diskusi-store');

// Route::get('question', [QuestionController::class, 'showtext']);

// Route::get('question-show', [QuestionController::class, 'questionshow'])->name('question-show');

// Route::post('question-store', [QuestionController::class, 'questionstore'])->name('question-store');
Route::get('testcoursefirst', [QuestionController::class, 'show']);
// routes/web.php


Route::get('/show-questions', [AnswerController::class, 'showQuestions'])->name('show_questions');
Route::post('/submit-answers', [AnswerController::class, 'submitAnswers'])->name('submit_answers');
// Example route definition
// Route::post('/submit-answers', 'AnswerController@submitAnswers')->middleware('auth');

