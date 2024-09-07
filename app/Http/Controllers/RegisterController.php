<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validatedRequest = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|unique:users|max:255',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:4|max:255',
            'is_lecturer' => 'required|in:siswa,pengajar',
        ]);

        $validatedRequest['password'] = Hash::make($validatedRequest['password']);
        $validatedRequest['remember_token'] = Str::random(10);
        $validatedRequest['is_lecturer'] = ($validatedRequest['is_lecturer'] == 'pengajar')? 1 : 0;
        // dd("Registrasi Berhasil!");

        User::create($validatedRequest);
    }
}
