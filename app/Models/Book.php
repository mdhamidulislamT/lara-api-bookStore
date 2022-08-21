<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'publication_year'
    ];

    public function author()
    {
        return $this->hasOneThrough(
            Author::class,
            BookAuthor::class,
            'book_id', // Foreign key on the books table...
            'id', // Local key on the books table...
            'id', // Local key on the authors table...
            'author_id' // Foreign key on the authors table...
        );
    }
}
