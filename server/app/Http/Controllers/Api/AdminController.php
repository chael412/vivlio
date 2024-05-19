<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;

class AdminController extends Controller
{

    use HasApiTokens, Notifiable;

    public function generateToken(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // dd($credentials);

        if (auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('api-token')->plainTextToken;

            return response()->json(['token' => $token], 200);
        }

        return response()->json(['message' => 'Unauthorized'], 401);
    }


    public function index()
    {
        try {
            $admins = User::all();
            return response()->json(['admins' => $admins], 200);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }


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
                'password' => 'required|string',
            ]);

            // Hash the password
            $validatedData['password'] = Hash::make($validatedData['password']);

            $user = User::create($validatedData);


            if ($user) {
                return response()->json(['message' => 'Admin created successfully'], 201);
            } else {
                return response()->json(['message' => 'Admin failed create'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    // public function show(string $id)
    // {
    //     try {
    //         $admin = Admin::with('user')->findOrFail($id);
    //         return response()->json(['admin' => $admin], 200);
    //     } catch (\Exception $e) {
    //         return response()->json(['message' => 'Error: ' . $e->getMessage()], 404);
    //     }
    // }


    // public function update(Request $request, string $id)
    // {


    //     try {
    //         $admin = Admin::findOrFail($id);
    //         $user = $admin->user;

    //         $validatedData = $request->validate([
    //             'username' => 'required|string',
    //             'password' => 'required|string',
    //             'firstname' => 'required|string',
    //             'middlename' => 'nullable|string',
    //             'lastname' => 'required|string',
    //             'birthdate' => 'required|date',
    //             'gender' => 'required|string|in:Male,Female',
    //             'photo' => 'nullable|string',
    //             'email' => 'required|email|unique:users,email,' . $user->id,
    //         ]);

    //         $validatedData['password'] = Hash::make($validatedData['password']);

    //         $admin->update($validatedData);

    //         // Update the user
    //         $user->update($validatedData);

    //         // Update the admin
    //         $admin->update([
    //             'username' => $validatedData['username'],
    //             'password' => $validatedData['password'],
    //         ]);

    //         if ($admin && $user) {
    //             return response()->json(['message' => 'Employee updated successfully'], 200);
    //         } else {
    //             return response()->json(['message' => 'Employee update failed'], 500);
    //         }
    //     } catch (\Exception $e) {
    //         return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
    //     }


    // }


    //     public function destroy(string $id)
//     {
//         try {
//             $admin = Admin::findOrFail($id);
//             $user = $admin->user;

    //             // Delete the user
//             $user->delete();

    //             $admin->delete();

    //             if ($admin && $user) {
//                 return response()->json(['message' => 'Admin deleted successfully'], 200);
//             } else {
//                 return response()->json(['message' => 'Admin delete failed'], 500);
//             }

    //         } catch (\Exception $e) {
//             return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
//         }
//     }
}
