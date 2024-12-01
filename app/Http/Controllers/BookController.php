<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    
    public function index() {
        return view('form');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => ['required', 'unique:books', 'max:255'],
            'author' => ['required', 'max:100'],
            'genre' => ['required']
        ]);
        $book = new Book();
        $book->title = $validated['title'];
        $book->author = $validated['author'];
        $book->genre = $validated['genre'];
        $book->save();
        return response()->json('Даанные книги корректны и она успешно сохранена');   
    }
}
