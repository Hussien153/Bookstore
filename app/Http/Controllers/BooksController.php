<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Http\Resources\BooksResource;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return BooksResource::collection(Book::all());
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
        $faker = \Faker\Factory::create(1);
        $book = Book::create([
            'name' => $faker->name,
            'description' => $faker->sentence,
            'publication_year' => $faker->year,

        ]);

        return new BooksResource($book);
    }

    /**
     * Display the specified resource.
     */
    
     public function show(Book $book)
     {
         // Eager load the 'authors' relationship
         //$book->load('authors');
         //return $book->authors;
     
         return new BooksResource($book);
     }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'publication_year' => $request->input('publication_year'),
        ]);

        return new BooksResource($book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return response()->json([
            "message"=>"successfully deleted"
        ]);
    }
}
