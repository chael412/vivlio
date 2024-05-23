<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $authors = Author::all();
            //$authors = Course::paginate(5);

            return response()->json(['authors' => $authors], 200);
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
                'author_name' => 'required|string',
            ]);

            $author = Author::create($validate);

            if ($author) {
                return response()->json([
                    'message' => ' Author created successfully'
                ], 201);
            } else {
                return response()->json([
                    'message' => 'Author failed create'
                ], 500);
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
            $course =
                $courses = Author::findOrFail($id);
            return response()->json(['course' => $course], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 404);
        }
    }


    public function update(Request $request, string $id)
    {
        try {
            $course =
                $courses = Author::findOrFail($id);

            $validatedData = $request->validate([
                'course_name' => 'required|string',
                'acro' => 'nullable|string'
            ]);

            $course->update($validatedData);

            return response()->json([
                'message' => '
            $courses = Author updated successfully'
            ], 200);

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
            $course =
                $courses = Author::findOrFail($id);
            $course->delete();

            return response()->json([
                'message' => '
            $courses = Author deleted successfully'
            ], 200);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }
}
