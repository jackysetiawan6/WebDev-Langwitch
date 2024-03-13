<?php

namespace App\Http\Controllers;

use App\Charts\UserDailyEXP;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Experience;
use App\Models\CompletedCourse;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserController extends Controller
{
    public function profile(UserDailyEXP $chart)
    {
        if (!session()->has('loginId')) {
            return redirect('/login')->with('error', 'Anda harus login terlebih dahulu!');
        }
        $user = User::find(session('loginId'));
        if ($user->is_new != -1) {
            return redirect('pretest')->with('error', 'Anda harus menyelesaikan pretest terlebih dahulu!');
        }
        $exp = Experience::where('user_id', $user->id)->first();
        $weekly = $exp->sn + $exp->sl + $exp->rb + $exp->km + $exp->jm + $exp->sb + $exp->mg;
        return view('profile', ['user' => $user, 'weekly' => $weekly, 'chart' => $chart->build()]);
    }
    public function homecourse()
    {
        if (!session()->has('loginId')) {
            return redirect('/login')->with('error', 'Anda harus login terlebih dahulu!');
        }
        $user = User::find(session('loginId'));
        if ($user->is_new != -1) {
            return redirect('pretest')->with('error', 'Anda harus menyelesaikan pretest terlebih dahulu!');
        }
        $exp = Experience::where('user_id', $user->id)->first();
        $weekly = $exp->sn + $exp->sl + $exp->rb + $exp->km + $exp->jm + $exp->sb + $exp->mg;
        $stars = CompletedCourse::where('user_id', $user->id)->first();
        return view('homecourse', ['user' => $user, 'weekly' => $weekly, 'stars' => $stars]);
    }
    public function review()
    {
        if (!session()->has('loginId')) {
            return redirect('/login')->with('error', 'Anda harus login terlebih dahulu!');
        }
        $user = User::find(session('loginId'));
        if ($user->is_new != -1) {
            return redirect('pretest')->with('error', 'Anda harus menyelesaikan pretest terlebih dahulu!');
        }
        return view('review', ['user' => $user]);
    }
    public function login()
    {
        return view('login');
    }
    public function login_user(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->input('email'))->first();
        if ($user) {
            if (Hash::check(md5($request->input('password')), $user->password)) {
                $request->session()->put('loginId', $user->id);
                $exp = Experience::where('user_id', $user->id)->first();
                if (now()->format('w') === '0' && !$exp->updated_at->isToday()) {
                    $exp->sn = 0;
                    $exp->sl = 0;
                    $exp->rb = 0;
                    $exp->km = 0;
                    $exp->jm = 0;
                    $exp->sb = 0;
                    $exp->mg = 0;
                }
                if (!$user->updated_at->isToday()) {
                    $user->live = 3;
                }
                if (Carbon::parse($exp->last_streak)->diffInDays(now()) > 1) {
                    $user->streak = 0;
                    $exp->last_streak = null;
                }
                $exp->save();
                $user->save();
                return redirect('review')->with('success', 'Login berhasil');
            } else {
                return redirect()->back()->with('error', 'Kata sandi salah');
            }
        } else {
            return redirect()->back()->with('error', 'Email tidak terdaftar');
        }
    }
    public function register()
    {
        return view('register');
    }
    public function register_user(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'confirmation' => 'required',
        ]);
        $fullname = $request->input('fullname');
        $email = $request->input('email');
        if (User::where('email', $email)->first()) {
            return redirect()->back()->with('error', 'Email sudah terdaftar');
        }
        $password = $request->input('password');
        $confirmation = $request->input('confirmation');
        if ($password != $confirmation) {
            return redirect()->back()->with('error', 'Kata sandi dan konfirmasi kata sandi tidak sama');
        }
        $user = new User;
        $user->fullname = $fullname;
        $user->email = $email;
        $user->password = Hash::make(md5($password));
        $user->created_at = now();
        $user->updated_at = now();
        $res = $user->save();
        if ($res) {
            $request->session()->put('loginId', $user->id);
            return redirect('/pretest')->with('success', 'Akun berhasil dibuat');
        } else {
            return redirect()->back()->with('error', 'Akun gagal dibuat');
        }
    }
    public function logout_user()
    {
        session()->forget('loginId');
        session()->invalidate();
        return redirect('/')->with('success', 'Logout berhasil');
    }
}
