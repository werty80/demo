<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        $attribute = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6), 'confirmed'],
        ]);

        User::create($attribute);

        Auth::login($user);

        return redirect('/jobs');
    }
}
