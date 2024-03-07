<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pretest;

class PretestAnswer extends Controller
{
    public function showQuestions()
    {
        // $data = Pretest::paginate(1);
        return view('pretest', ['pretest' => $data]);
    }

    public function submitAnswers(Request $request)
    {
        $answers = $request->input('answers');

        $correctAnswers = Pretest::whereIn('id', array_keys($answers))
            ->pluck('correct', 'id')
            ->toArray();

        $results = [];

        foreach ($answers as $questionId => $userAnswer) {
            $results[$questionId] = $userAnswer === $correctAnswers[$questionId];
        }

        // For demonstration purposes, you can return or dump the results
        // return view('pretest.results', ['results' => $results]);
        dd($results);
    }
}
