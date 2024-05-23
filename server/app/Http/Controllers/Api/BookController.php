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
        $books = Book::with('authors')->get();
        return response()->json(['books' => $books], 200);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'call_no' => 'required|string',
            'isbn' => 'required|string',
            'accession_no' => 'required|string',
            'edition' => 'required|string',
            'physical_description' => 'nullable|string',
            'volume' => 'required|string',
            'notes' => 'required|string',
            'authors' => 'required|int',
            'authors.*' => 'exists:authors,id',
        ]);

        $book = Book::create($validatedData);
        $book->authors()->sync($request->authors);

        //return response()->json($book->load('authors'), 201);
        if ($book) {
            return response()->json(['message' => 'Book created successfully'], 201);
        } else {
            return response()->json(['message' => 'Book failed added'], 500);
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
