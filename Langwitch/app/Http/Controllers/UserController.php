<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Hash;

class UserController extends Controller
{
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
                return redirect('')->with('success', 'Login berhasil');
            } else {
                return redirect()->back()->with('error', 'Password salah');
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
        $password = $request->input('password');
        $confirmation = $request->input('confirmation');
        if ($password != $confirmation) {
            return redirect()->back()->with('error', 'Password dan konfirmasi password tidak sama');
        }
        $user = new User;
        $user->fullname = $fullname;
        $user->email = $email;
        $user->password = Hash::make(md5($password));
        $res = $user->save();
        if ($res) {
            return redirect('/pretest')->with('success', 'Akun berhasil dibuat');
        } else {
            return redirect()->back()->with('error', 'Akun gagal dibuat');
        }
    }
}
