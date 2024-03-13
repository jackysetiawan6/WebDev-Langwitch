<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussion;
use App\Models\User;

class DiscussionController extends Controller
{
    public function index()
    {
        if (!session('loginId')) {
            return redirect('login')->with('error', 'Anda harus login terlebih dahulu!');
        }
        $user = User::find(session('loginId'));
        if ($user->is_new != -1) {
            return redirect('pretest')->with('error', 'Anda harus menyelesaikan pretest terlebih dahulu!');
        }
        $discussions = Discussion::with('user')->latest()->get();
        return view('diskusi', compact('discussions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);
        $data = new Discussion;
        $data->user_id = User::find(session('loginId'))->id;
        $data->text = $request->text;
        $data->save();
        return redirect()->back()->with('success', 'Diskusi berhasil ditambahkan!');
    }
}
