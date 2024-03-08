<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pretest;
use App\Models\User;

class PretestAnswer extends Controller
{
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

        $score = collect($results)->filter()->count();
        $user = User::find(session('loginId'));

        switch ($score) {
            case 1:
                $user->badge = 'Rookie';
                break;
            case 2:
                $user->badge = 'Magician';
                break;
            case 3:
                $user->badge = 'Sorcerer';
                break;
            case 4:
                $user->badge = 'Wizard';
                break;
            default:
                $user->badge = 'Rookie';
        }

        $user->is_new = 0;
        $user->save();

        return redirect('pretest');

        // dd($score, $results);
    }
}
