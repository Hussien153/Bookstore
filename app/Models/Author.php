<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected $hidden = [
        'created_at',
        'updated_at',
        'pivot'
    ];

    public function books()
    {
        return $this->hasMany(
            '\App\Models\Book',
            '\App\Models\BookAuthor', 
            'author_id', 
            'id',
            'id',
            'book_id');
    }
    

}
