<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\User;
use App\Models\Experience;

class UserDailyEXP
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        if (!session()->has('loginId')) {
            return redirect('/login');
        }
        $user = User::find(session('loginId'));
        $exp = Experience::where('user_id', $user->id)->first();
        return $this->chart->areaChart()
            ->setXAxis(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'])
            ->setGrid()
            ->setHeight(400)
            ->setWidth(700)
            ->setDataset([
                [
                    'name' => 'EXP',
                    'data' => [$exp->sn, $exp->sl, $exp->rb, $exp->km, $exp->jm, $exp->sb, $exp->mg]
                ]
            ])
            ->setColors(['#9167E3']);
    }
}
