<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;   // ✅ Correct import
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        // Try login with provided credentials
        if (!Auth::attempt($validated)) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }

        $user = User::where('email', $request->email)->first();

        // Create Sanctum token
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login successful!',
            'token'   => $token,
            'user'    => $user
        ], 200);
    }
}
