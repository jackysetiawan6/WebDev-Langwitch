<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\User;
use App\Models\Experience;
use Illuminate\Support\Facades\View;

class AnswerController extends Controller
{
    // public function showQuestions()
    // {
    //     $data = Question::paginate(1);
    //     return view('testcoursefirst', ['Question' => $data]);
    // }
    public function showQuestions(Request $request)
    {
        $currentPage = $request->input('page', 1);

        $data = Question::paginate(1, ['*'], 'page', $currentPage);

        return View::make('testcoursefirst', ['Question' => $data, 'currentPage' => $currentPage]);
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
            if ($results[$exerciseId]) {
                $user = User::find(session('loginId'));
                $user->exp += 10;
                $user->save();
                $exp = Experience::where('user_id', $user->id)->first();
                $dayname = now()->format('D');
                switch ($dayname) {
                    case 'Mon':
                        $exp->sn += 10;
                        break;
                    case 'Tue':
                        $exp->sl += 10;
                        break;
                    case 'Wed':
                        $exp->rb += 10;
                        break;
                    case 'Thu':
                        $exp->km += 10;
                        break;
                    case 'Fri':
                        $exp->jm += 10;
                        break;
                    case 'Sat':
                        $exp->sb += 10;
                        break;
                    case 'Sun':
                        $exp->mg += 10;
                        break;
                }
                $exp->save();
            }
        }

        $currentPage = $request->input('page', 1);
        $nextPage = $currentPage + 1;

        return redirect()->route('show_questions', ['page' => $nextPage])->with('results', $results);

        // For demonstration purposes, let's just dump the results to the console
        // dd($results);
    }
}
