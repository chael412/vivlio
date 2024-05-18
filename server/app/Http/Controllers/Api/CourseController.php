<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $courses = Course::all();
            $courses = Course::paginate(5);

            return response()->json(['courses' => $courses], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 404);
        }
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $validate = $request->validate([
                'course_name' => 'required|string',
                'acro' => 'nullable|string'
            ]);

            $course_run = Course::create($validate);

            if ($course_run) {
                return response()->json(['message' => 'Course created successfully'], 201);
            } else {
                return response()->json(['message' => 'Course failed create'], 500);
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
        try {
            $course = Course::findOrFail($id);
            return response()->json(['course' => $course], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 404);
        }
    }


    public function update(Request $request, string $id)
    {
        try {
            $course = Course::findOrFail($id);

            $validatedData = $request->validate([
                'course_name' => 'required|string',
                'acro' => 'nullable|string'
            ]);

            $course->update($validatedData);

            return response()->json(['message' => 'Course updated successfully'], 200);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $course = Course::findOrFail($id);
            $course->delete();

            return response()->json(['message' => 'Course deleted successfully'], 200);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

}
