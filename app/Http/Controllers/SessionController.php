<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view();
    }

    public function store()
    {
        $attribute = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

       if (! Auth::attempt($attribute)) {
           throw ValidationException::withMessages([
               'email' => 'The provided credentials do not match our records.'
           ]);
       }

        request()->session()->regenerate();

        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
