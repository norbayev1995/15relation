<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function handleRegister(StoreUserRequest $request)
    {
        $user = User::create($request->validated());

        Auth::login($user);

        return redirect()->route('index');
    }

    public function handleLogin(LoginRequest $request)
    {
        $validated = $request->validated();

        if (Auth::attempt($validated)){
            return redirect()->route('index');
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
