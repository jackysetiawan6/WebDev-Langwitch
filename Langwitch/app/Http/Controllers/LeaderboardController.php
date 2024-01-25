<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class LeaderboardController extends Controller
{
    function show()
    {
        $data = User::all();
        return view('papanskor',['User'=>$data]);
    }
}
