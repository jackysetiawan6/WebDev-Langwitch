<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pretest;

class PretestController extends Controller
{
    function show()
    {
        if (!session('loginId')) {
            return redirect('login');
        }
        $user = User::where('id', session('loginId'))->first();
        if ($user->is_new == -1) {
            return redirect('homecourse');
        }
        $data = Pretest::all();
        return view('pretest', ['pretest' => $data, 'user' => $user]);
    }

    function updateStatus()
    {
        $user = User::find(session('loginId'));
        $user->is_new = -1;
        $user->save();

        // dd($user->is_new);
        return redirect('homecourse');
    }
}
