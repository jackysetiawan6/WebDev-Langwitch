<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\User;

class QuestionController extends Controller
{
    function show()
    {
        if (!session()->has('loginId')) {
            return redirect('/login');
        }
        $user = User::find(session('loginId'));
        if ($user->is_new != -1) {
            return redirect('pretest');
        }
        $data = Question::paginate(1);
        return view('testcoursefirst', ['Question' => $data]);
    }
}
