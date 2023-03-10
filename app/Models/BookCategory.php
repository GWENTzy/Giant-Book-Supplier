<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    protected $table = 'books_categories';

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

}
