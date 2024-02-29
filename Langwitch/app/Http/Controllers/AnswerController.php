<?php

// app/Http/Controllers/AnswerController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Spatie\LaravelHtml\Html as Html;

class AnswerController extends Controller
{
    public function showQuestions()
    {
        $data = Question::paginate(1);
        return view('testcoursefirst', ['Question' => $data]);
    }

    public function submitAnswers(Request $request)
    {
        $answers = $request->input('answers');

    $correctAnswers = Question::whereIn('exercise_id', array_keys($answers))
        ->pluck('correct_opt', 'exercise_id')
        ->toArray();

    $results = [];

    foreach ($answers as $exerciseId => $userAnswer) {
        $results[$exerciseId] = $userAnswer === $correctAnswers[$exerciseId];
    }

    // For demonstration purposes, let's just dump the results to the console
    dd($results);
    }
}
