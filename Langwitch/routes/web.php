<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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


Route::get('/pretest', function () {
    return view('pretest');
});

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

Route::get('/login', [Users::class, 'login']);
Route::post('/login-success', [Users::class, 'login_user'])->name('login-success');

Route::get('/register', [Users::class, 'register']);
Route::post('/register-success', [Users::class, 'register_user'])->name('register-success');
