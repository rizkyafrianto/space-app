<?php

namespace App\Http\Controllers;

use \App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|max:50',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect('/login')->with('success', 'Registration was successfull!');
    }
}
