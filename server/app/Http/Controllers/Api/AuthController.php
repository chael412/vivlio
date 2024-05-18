<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'firstname' => 'required|string',
                'middlename' => 'nullable|string',
                'lastname' => 'required|string',
                'birthdate' => 'required|date',
                'gender' => 'required|string|in:Male,Female',
                'photo' => 'nullable|string',
                'email' => 'required|email|unique:users,email',
                'username' => 'required|string|unique:admins,username',
                'password' => 'required|string',
            ]);

            // Hash the password
            $validatedData['password'] = Hash::make($validatedData['password']);

            $user = User::create($validatedData);
            $userId = $user->id;

            // Create a new admin
            $admin = Admin::create([
                'us_id' => $userId,
                'username' => $validatedData['username'],
                'password' => $validatedData['password'],
            ]);


            if ($admin) {
                return response()->json(['message' => 'Admin created successfully'], 201);
            } else {
                return response()->json(['message' => 'Admin failed create'], 500);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }
}
