<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pretest;

class PretestController extends Controller
{
    public function pretest()
    {
        if (!session('loginId')) {
            return redirect('login');
        }
        $user = User::where('id', session('loginId'))->first();
        return view('pretest', ['user' => $user]);
    }
    function show()
    {
        $data = Pretest::all();
        return view('pretest', ['pretest' => $data]);
    }

}
