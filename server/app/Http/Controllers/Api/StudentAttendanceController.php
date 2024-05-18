<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\StudentAttendance;
use Illuminate\Http\Request;

class StudentAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $student_attendances = StudentAttendance::all();
            return response()->json(['student_attendances' => $student_attendances], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $student_attendance = StudentAttendance::create(['stud_id' => $request->stud_id]);

            if ($student_attendance) {
                return response()->json(['message' => 'Login successfully!'], 200);
            } else {
                return response()->json(['message' => 'Login failed'], 500);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        try {

            $s_attendance = StudentAttendance::findOrFail($id);
            $s_attendance->delete();

            if ($s_attendance) {
                return response()->json(['message' => 'Student attendance deleted successfully'], 200);
            } else {
                return response()->json(['message' => 'Student attendance failed delete'], 200);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }
}
