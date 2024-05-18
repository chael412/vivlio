<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function index()
    {
        try {
            $departments = Department::all();
            return response()->json(['departments' => $departments], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 404);
        }

    }


    public function store(Request $request)
    {
        try {
            $validate = $request->validate(['department_name' => 'required|string']);
            $department = Department::create($validate);

            if ($department) {
                return response()->json(['message' => 'Department created successfully'], 201);
            } else {
                return response()->json(['message' => 'Department failed create'], 500);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }

    }

    public function show(string $id)
    {
        try {
            $department = Department::findOrFail($id);
            return response()->json(['department' => $department], 200);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 404);
        }

    }



    public function update(Request $request, string $id)
    {
        try {
            $department = Department::findOrFail($id);
            $validatedData = $request->validate(['department_name' => 'required|string']);

            $department->update($validatedData);

            if ($department) {
                return response()->json(['message' => 'Department updated successfully'], 200);
            } else {
                return response()->json(['message' => 'Department failed update'], 500);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }


    public function destroy(string $id)
    {
        try {
            $department = Department::findOrFail($id);
            $department->delete();

            if ($department) {
                return response()->json(['message' => 'Department deleted successfully'], 200);
            } else {
                return response()->json(['message' => 'Department failed delete'], 200);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }
}
