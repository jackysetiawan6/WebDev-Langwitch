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
            return redirect('/login')->with('error', 'Anda harus login terlebih dahulu!');
        }
        $user = User::find(session('loginId'));
        if ($user->is_new != -1) {
            return redirect('pretest')->with('error', 'Anda harus menyelesaikan pretest terlebih dahulu!');
        }
        if ($user->live == 0) {
            return redirect('homecourse')->with('error', 'Anda harus menyelesaikan pretest terlebih dahulu!');
        }
        $data = Question::limit(5)->paginate(1);
        return view('testcoursefirst', ['Question' => $data, 'currentUser' => $user]);
    }
}
