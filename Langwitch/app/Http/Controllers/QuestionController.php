<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    function show()
    {
        $data = Question::paginate(1);

        return view('testcoursefirst', ['Question' => $data]);
    }

}

