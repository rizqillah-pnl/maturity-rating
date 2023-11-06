<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login', ['title' => 'Login']);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->to('/');
        }

        return back()->withErrors([
            'username' => 'Username/Password Salah!',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function register()
    {
        return view('auth.register', ['title' => 'Register']);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => ['required', 'min:3', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', 'unique:users,username'],
            'password' => ['required', 'min:3', 'max:50'],
        ]);


        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = "user";

        $create = User::create($validatedData);
        if ($create) {
            $credentials = [
                'username' => $create->username,
                'password' => $request->password
            ];

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->to('/')->with('success', 'Berhasil Membuat Akun Baru!');
            }

            return back()->withErrors([
                'username' => 'Username/Password Salah!',
            ])->onlyInput('username');
        }

        return back()->withErrors([
            'username' => 'Username/Password Salah!',
        ])->withInput();
    }
}
