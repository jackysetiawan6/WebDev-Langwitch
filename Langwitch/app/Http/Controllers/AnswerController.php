<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\User;
use App\Models\Experience;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;

class AnswerController extends Controller
{
    public function showQuestions(Request $request)
    {
        $currentPage = $request->input('page', 1);
        $data = Question::paginate(1, ['*'], 'page', $currentPage);
        return View::make('testcoursefirst', ['Question' => $data, 'currentPage' => $currentPage]);
    }

    public function submitAnswers(Request $request)
    {
        $answers = $request->input('answers');

        if ($answers === null) {
            return redirect()->back()->with('error', 'No answers provided!');
        }
        $correctAnswers = Question::whereIn('exercise_id', array_keys($answers))
            ->pluck('correct_opt', 'exercise_id')
            ->toArray();

        $results = [];

        foreach ($answers as $exerciseId => $userAnswer) {
            $results[$exerciseId] = $userAnswer === $correctAnswers[$exerciseId];
            $user = User::find(session('loginId'));
            if ($results[$exerciseId]) {
                $user->exp += 10;
                switch ($user->exp) {
                    case $user->exp < 7000:
                        $user->badge = 'Wizard';
                        break;
                    case $user->exp < 4200:
                        $user->badge = 'Sorcerer';
                        break;
                    case $user->exp < 2100:
                        $user->badge = 'Magician';
                        break;
                    case $user->exp < 700:
                        $user->badge = 'Rookie';
                        break;
                    default:
                        $user->badge = 'Rookie';
                        break;
                }
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
                if ($exp->last_streak == null || Carbon::parse($exp->last_streak)->diffInDays(now()) === 1) {
                    $user->streak += 1;
                    $user->save();
                    $exp->last_streak = now();
                }
                if (session()->has('correctCount')) {
                    session()->put('correctCount', session('correctCount') + 1);
                } else {
                    session()->put('correctCount', 1);
                }
            } else {
                $user->live -= 1;
                $user->save();
                if ($user->live == 0) {
                    return redirect()->route('homecourse')->with('error', 'Nyawa anda habis! Silahkan coba lagi besok!');
                }
            }
        }

        $currentPage = $request->input('page', 1);
        $nextPage = $currentPage + 1;
        return redirect()->route('show_questions', ['page' => $nextPage])->with('results', $results);

        // For demonstration purposes, let's just dump the results to the console
        // dd($results);
    }
}
