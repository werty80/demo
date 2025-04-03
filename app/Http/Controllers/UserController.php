<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function store(StoreUserRequest $request)
    {
        // Validation is already handled by the form request!

        // If we reach here, the email is unique
        $validatedData = $request->validated();

        // Proceed with saving the user
        User::create($validatedData);

        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }
    public function rules()
    {
        $userId = $this->route('user'); // Retrieve the user ID from the route

        return [
            'email' => 'required|email|unique:users,email,' . $userId, // Exclude current user
        ];
    }
}
