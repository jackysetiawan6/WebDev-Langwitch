<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\PretestController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use Stichoza\GoogleTranslate\GoogleTranslate;
use App\Http\Controllers\PretestAnswer;

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

Route::get('/translate', function () {
    if (isset($_GET['text'])) {
        $inputText = $_GET['text'];
        $tr = new GoogleTranslate('en');
        $tr->setSource('id');
        $tr->setTarget('en');
        $translatedText = $tr->translate($inputText);
        return $translatedText;
    } else {
        return 'Error: Text parameter missing';
    }
});

Route::get('/course', function () {
    return view('course');
});

Route::get('/review', [UserController::class, 'review']);

Route::get('/videocourse', function () {
    return view('videocourse');
});

Route::get('/pptcourse', function () {
    return view('pptcourse');
});

Route::get('/homecourse', [UserController::class, 'homecourse'])->name('homecourse');

Route::get('/profile', [UserController::class, 'profile']);
Route::get('/update-status', [PretestController::class, 'updateStatus'])->name('update-status');

Route::get('/terjemahan', function () {
    return view('translate');
});

Route::get('/login', [UserController::class, 'login']);
Route::post('/login-success', [UserController::class, 'login_user'])->name('login-success');

Route::get('/register', [UserController::class, 'register']);
Route::post('/register-success', [UserController::class, 'register_user'])->name('register-success');

Route::get('/logout-success', [UserController::class, 'logout_user'])->name('logout_success');

Route::get('papanskor', [LeaderboardController::class, 'show']);

Route::get('/diskusi', [DiscussionController::class, 'index'])->name('diskusi-show');

Route::post('/diskusistore', [DiscussionController::class, 'store'])->name('diskusi-store');

Route::get('testcoursefirst', [QuestionController::class, 'show']);

Route::get('/show-questions', [AnswerController::class, 'showQuestions'])->name('show_questions');
Route::post('/submit-answers', [AnswerController::class, 'submitAnswers'])->name('submit_answers');

Route::get('pretest', [PretestController::class, 'show']);
Route::get('/show-questions-pretest', [PretestAnswer::class, 'showQuestions'])->name('show_questions_pretest');
Route::post('/submit-answers-pretest', [PretestAnswer::class, 'submitAnswers'])->name('submit_answers_pretest');
