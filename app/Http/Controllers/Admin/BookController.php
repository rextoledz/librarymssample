<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Show the form to add a book
    public function create()
    {
        return view('books.create');
    }

    // Store the book in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required|integer',
            'isbn' => 'required|string|max:13|unique:books',
        ]);

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'year' => $request->year,
            'isbn' => $request->isbn,
        ]);

        return redirect()->route('books.create')->with('success', 'Book added successfully!');
    }
}
