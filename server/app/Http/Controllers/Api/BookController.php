<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with('authors', 'publishers')->get();
        return response()->json(['books' => $books], 200);
    }


    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'title' => 'required|string',
            'call_no' => 'required|string',
            'isbn' => 'required|string',
            'accession_no' => 'required|string',
            'edition' => 'required|string',
            'physical_description' => 'nullable|string',
            'volume' => 'required|string',
            'notes' => 'required|string',
            'authors' => 'required|array',
            'authors.*' => 'exists:authors,id',
            'publishers' => 'required|array',
            'publishers.*' => 'exists:publishers,id',
        ]);

        // Create the book
        $book = Book::create([
            'title' => $validatedData['title'],
            'call_no' => $validatedData['call_no'],
            'isbn' => $validatedData['isbn'],
            'accession_no' => $validatedData['accession_no'],
            'edition' => $validatedData['edition'],
            'physical_description' => $validatedData['physical_description'] ?? null,
            'volume' => $validatedData['volume'],
            'notes' => $validatedData['notes'],
        ]);

        // Attach authors and publishers
        foreach ($request->authors as $authorId) {
            $book->authors()->attach($authorId);
        }

        foreach ($request->publishers as $publisherId) {
            $book->publishers()->attach($publisherId);
        }

        // Return response
        if ($book) {
            return response()->json(['message' => 'Book created successfully'], 201);
        } else {
            return response()->json(['message' => 'Book creation failed'], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
