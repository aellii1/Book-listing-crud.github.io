<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    public function index()
    {
        $books = Books::latest()->paginate(5);

        return view('books.index',compact('books'))

        ->with('i',(request()->input('page',1)-1)*5);
    }



    public function create()
    {
        return view('books.create');
    }



    public function store(Request $request)
    {

        $request->validate([
            'Title' => 'required|string|max:255',
            'Genre' => 'required|string',
            'Author' => 'required|string',
            'Pages' => 'required|integer',
            'Price' => 'required|numeric',
            'Publication_Date' => 'nullable|date', 
        ]);
    
        $book = new Books();
        $book->Title = $request->input('Title');
        $book->Genre = $request->input('Genre');
        $book->Author = $request->input('Author');
        $book->Pages = $request->input('Pages');
        $book->Price = $request->input('Price');
        $book->Publication_Date = $request->input('Publication_Date');  // Handle null value appropriately
        $book->save();
    
        return redirect()->route('books.index')
        
        ->with('success', 'Book created successfully.');
    }



    public function show(Books $book)
    {
        return view('books.show', compact('book'));
    }



    public function edit(Books $book)
    {
        $book = Books::find($book);

        if(!$book) {
            abort(404);
        }

        return view('books.edit', compact('book'));
    }


    
    public function update(Request $request, Books $book)
    {

        $request->validate([
            'Title' => 'required|string|max:255',
            'Genre' => 'required|string',
            'Author' => 'required|string',
            'Pages' => 'required|integer',
            'Price' => 'required|numeric',
            'Publication_Date' => 'nullable|date', 
        ]);

        $book->update([
            'Title' => $request->input('Title'),
            'Genre' => $request->input('Genre'),
            'Author' => $request->input('Author'),
            'Pages' => $request->input('Pages'),
            'Publication_Date' => $request->input('Publication_Date'),
            'Price' => $request->input('Price'),
        ]);
    
        return redirect()->route('books.index')
        ->with('success', 'Book updated successfully.');
    }



    public function destroy(Books $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted Successfully.');
    }
}
