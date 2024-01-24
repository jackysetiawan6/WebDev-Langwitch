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

Route::get('/videocourse', function () {
    return view('videocourse');
});

Route::get('/pptcourse', function () {
    return view('pptcourse');
});

Route::get('/pretest', function () {
    return view('pretest');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/papanskor', function () {
    return view('papanskor');
});

Route::get('/belajar', function () {
    return view('belajar');
});
Route::get('/login', [Users::class, 'login']);
Route::post('/login-success', [Users::class, 'login_user'])->name('login-success');

Route::get('/register', [Users::class, 'register']);
Route::post('/register-success', [Users::class, 'register_user'])->name('register-success');
