<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('buat_akun.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika login berhasil, cek role pengguna
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->route('beranda-a');
            } else if ($user->role == 'sebaya' || $user->role == 'profesional') {
                return redirect()->route('beranda-p');
            } else {
                return redirect()->route('beranda-m');
            }
        } else {
            return redirect()->route('login')
                ->with('error','Email dan Password Salah!');
        }
    }

    public function register()
    {
        return view('buat_akun.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users|min:8|max:32',
            'password' => 'required|min:8|max:255',
            'password_confirmation' => 'required|same:password',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login')
            ->with('success','Akun berhasil terdaftar!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
