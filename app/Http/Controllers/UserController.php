<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'pronoun' => 'required|in:she/her,he/him,they/them',
            'instagram_handle' => 'nullable|string',
            'profile_image' => 'nullable|string',
        ]);

        // Create user
        $user = User::create($validatedData);

        return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
    }
}

