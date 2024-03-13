<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LeaderboardController extends Controller
{
    function show()
    {
        if (!session('loginId')) {
            return redirect('login')->with('error', 'Anda harus login terlebih dahulu!');
        }
        $user = User::find(session('loginId'));
        if ($user->is_new != -1) {
            return redirect('pretest')->with('error', 'Anda harus menyelesaikan pretest terlebih dahulu!');
        }
        $data = User::all();
        return view('papanskor', ['User' => $data]);
    }
}
