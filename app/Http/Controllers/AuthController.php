<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required|date',
            'sex' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'contact_number' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'username' => $request->username,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'sex' => $request->sex,
            'address' => $request->address,
            'contact_number' => $request->contact_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login');
    }
}