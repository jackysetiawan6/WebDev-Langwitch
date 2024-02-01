<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PretestController extends Controller
{
    public function pretest()
    {
        $user = User::where('id', session('loginId'))->first();
        $fullname = $user->fullname;
        return view('pretest', ['fullname' => $fullname]);
    }
}
