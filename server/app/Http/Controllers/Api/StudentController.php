<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;


use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('user', 'course')
            ->orderBy('created_at', 'desc') // Order by created_at, newest first
            ->get();

        return response()->json(['students' => $students], 200);
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
                'student_no' => 'required|string|unique:students,student_no',
                'cs_id' => 'required|exists:courses,id',
            ]);

            // Create a new user
            $user = User::create($validatedData);

            // User lastIdInserted
            $userId = $user->id;

            // Create a new student
            Student::create([
                'student_no' => $validatedData['student_no'],
                'cs_id' => $validatedData['cs_id'],
                'us_id' => $userId,
            ]);

            return response()->json(['message' => 'Student added successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function show(string $id)
    {
        try {
            $student = Student::with('user', 'course')->findOrFail($id);
            return response()->json(['student' => $student], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 404);
        }
    }


    public function update(Request $request, string $id)
    {
        try {
            $student = Student::findOrFail($id);
            $user = $student->user;

            $validatedData = $request->validate([
                'firstname' => 'required|string',
                'middlename' => 'nullable|string',
                'lastname' => 'required|string',
                'birthdate' => 'required|date',
                'gender' => 'required|string|in:Male,Female',
                'photo' => 'nullable|string',
                'email' => 'required|email|unique:users,email,' . $user->id,
                'student_no' => 'required|string|unique:students,student_no,' . $student->id,
                'cs_id' => 'required|exists:courses,id',
            ]);

            // Update the user
            $user->update($validatedData);

            // Update the student
            $student->update([
                'student_no' => $validatedData['student_no'],
                'cs_id' => $validatedData['cs_id'],
            ]);

            if ($student && $user) {
                return response()->json(['message' => 'Student updated successfully'], 200);
            } else {
                return response()->json(['message' => 'Student update failed'], 500);
            }


        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }


    public function destroy(string $id)
    {
        try {
            $student = Student::findOrFail($id);
            $user = $student->user;

            // Delete the user
            $user->delete();

            // Delete the student
            $student->delete();

            if ($student && $user) {
                return response()->json(['message' => 'Student deleted successfully'], 200);
            } else {
                return response()->json(['message' => 'Student delete failed'], 500);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }
}
