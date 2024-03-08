<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LeaderboardController extends Controller
{
    function show()
    {
        if (!session('loginId')) {
            return redirect('login');
        }
        $user = User::find(session('loginId'));
        if ($user->is_new != -1) {
            return redirect('pretest');
        }
        $data = User::all();
        return view('papanskor', ['User' => $data]);
    }
}
