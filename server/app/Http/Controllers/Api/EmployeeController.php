<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::with('user', 'department')->get();
        return response()->json(['employees' => $employees], 200);
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
                'employee_no' => 'required|string|unique:employees,employee_no',
                'dp_id' => 'required|exists:departments,id',
            ]);

            // Create a new user
            $user = User::create($validatedData);

            // User lastIdInserted
            $userId = $user->id;

            // Create a new employee
            $employee = Employee::create([
                'us_id' => $userId,
                'dp_id' => $validatedData['dp_id'],
                'employee_no' => $validatedData['employee_no'],
            ]);

            if ($employee && $user) {
                return response()->json(['message' => 'Employee added successfully'], 201);
            } else {
                return response()->json(['message' => 'Employee failed create'], 500);
            }


        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }


    public function show(string $id)
    {
        try {
            $employee = Employee::with('user', 'department')->findOrFail($id);
            return response()->json(['employee' => $employee], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 404);
        }
    }


    public function update(Request $request, string $id)
    {
        try {
            $employee = Employee::findOrFail($id);
            $user = $employee->user;

            $validatedData = $request->validate([
                'firstname' => 'required|string',
                'middlename' => 'nullable|string',
                'lastname' => 'required|string',
                'birthdate' => 'required|date',
                'gender' => 'required|string|in:Male,Female',
                'photo' => 'nullable|string',
                'email' => 'required|email|unique:users,email,' . $user->id,
                'employee_no' => 'required|string|unique:employees,employee_no,' . $employee->id,
                'dp_id' => 'required|exists:departments,id',
            ]);


            // Update the user
            $user->update($validatedData);

            // Update the employee
            $employee->update([
                'dp_id' => $validatedData['dp_id'],
                'employee_no' => $validatedData['employee_no'],
            ]);

            if ($employee && $user) {
                return response()->json(['message' => 'Employee updated successfully'], 200);
            } else {
                return response()->json(['message' => 'Employee update failed'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }



    public function destroy(string $id)
    {
        try {
            $employee = Employee::findOrFail($id);
            $user = $employee->user;

            // Delete the user
            $user->delete();

            // Delete the student
            $employee->delete();

            if ($employee && $user) {
                return response()->json(['message' => 'Employee deleted successfully'], 200);
            } else {
                return response()->json(['message' => 'Employee delete failed'], 500);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }
}
