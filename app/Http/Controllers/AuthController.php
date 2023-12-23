<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signIn() {
        return view('auth.sign-in');
    }

    public function signInProcess(Request $request) {
        $credentials = $request->only('username', 'password');
        $remember = $request->has('remember_token');

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('dashboard')->with('status', 'Berhasil Login');

        } else {
            return back()->withInput($request->only('username', 'remember_token'))->with('failed', 'Username atau Password salah');
        }

    }



    public function signUp() {
        $classes = Classes::all();
        return view('auth.sign-up', compact('classes'));
    }

    public function signUpProcess(Request $request) {
        $validate = $request->validate([
            'name' => 'required',
            'nisn' => 'required|unique:users,nisn',
            'phone' => 'required|unique:users,phone',
            'class_id' => 'required',
            'username' => 'required|min:6|unique:users,username',
            'password' => 'required|min:6'
        ]);

        $data = [
            'name' => $request->name,
            'nisn' => $request->nisn,
            'phone' => $request->phone,
            'class_id' => $request->class_id,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ];

        User::create($data);

        return redirect('sign-up')->with('status', 'BERHASIL MEMBUAT AKUN! SILAHKAN SIGN IN!');
    }


    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('signIn-index');
    }
}
