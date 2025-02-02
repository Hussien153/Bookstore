<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','publication_year'];

    /*public function authors()
    {
        return $this->hasMany(
            '\App\Models\Author',
            '\App\Models\BookAuthor', 
            'book_id', 
            'id',
            'id',
            'author_id');
    }*/
    public function authors()
    {
        return $this->belongsToMany(Author::class, 'book_author');
    }
}
