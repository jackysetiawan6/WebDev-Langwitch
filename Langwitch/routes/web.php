<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\PretestController;

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

// review linker

Route::get('/videocourse', function () {
    return view('videocourse');
});

Route::get('/pptcourse', function () {
    return view('pptcourse');
});

// end of review linker

Route::get('/papanskor', function () {
    return view('papanskor');
});

Route::get('/diskusi', function () {
    return view('diskusi');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/terjemahan', function () {
    return view('translate');
});
// end of sidebar linker

Route::get('/login', [UserController::class, 'login']);
Route::post('/login-success', [UserController::class, 'login_user'])->name('login-success');

Route::get('/register', [UserController::class, 'register']);
Route::post('/register-success', [UserController::class, 'register_user'])->name('register-success');

Route::get('papanskor', [LeaderboardController::class, 'show']);
// Route::get('diskusi', [LeaderboardController::class, 'show']);
Route::get('diskusi', [DiscussionController::class, 'showtext']);
// Route::get('/diskusi', [DiscussionController::class, 'Discussion']);
// Route::post('/diskusi-store', [DiscussionController::class, 'discussion_store'])->name('diskusi-store');

Route::post('/diskusi-store', [DiscussionController::class, 'store'])->name('diskusi-store');
Route::get('/diskusi-show', [DiscussionController::class, 'DiscussionShow'])->name('diskusi-show');
