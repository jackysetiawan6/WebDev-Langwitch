<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    // function showtext()
    // {
    //     $question = Question::all();
    //     return view('questioninserter', ['Question' => $question]);
    // }
    // public function questionshow()
    // {
    //     return view('questioninserter');
    // }
    // public function questionstore(Request $request)
    // {
    //     $request->validate([
    //         'soal' => 'required'
    //     ]);

    //     $question = new Question;
    //     $question->soal = $request->soal;
    //     $question->save();

    //     return redirect()->route('question-store')->with('success', 'Pesan berhasil dikirimkan');
    // }
    function show()
    {
        $data = Question::paginate(1);
        return view('testcoursefirst',['Question'=>$data]);
    }

}

