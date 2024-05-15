<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    // Register Api(POST)
    public function register(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|confirmed",
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        return response()->json([
            "status" => true,
            "message" => "Successfully created a new user"
        ], 200);
    }

    // Login Api(POST)
    public function login(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        if (Auth::attempt([
            "email" => $request->email,
            "password" => $request->password
        ])) {
            $user = Auth::user();
            $token = $user->createToken('myToken')->accessToken;

            return response()->json([
                "status" => true,
                "message" => "Login successfuly",
                "token" => $token
            ], 200);
        } else {
            return response()->json([
                "status" => false,
                "message" => "Invalid login details"
            ], 404);
        }
    }

    // Profile Api(GET)
    public function profile()
    {
        $user = Auth::user();

        return response()->json([
            "status" => true,
            "message" => "profile Information",
            "data" => $user
        ], 200);
    }

    // Logout Api(GET)
    public function logout()
    {
        auth()->user()->token()->revoke();

        return response()->json([
            "status" => true,
            "message" => "user logged out"
        ], 200);
    }
}
