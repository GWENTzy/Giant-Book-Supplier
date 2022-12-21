<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Book extends Model
{
    protected $table = 'books';
    protected $primarykey = 'id';

    public function publisher()
    {
        return $this->belongsTo(publisher::class, 'publisher_id', 'id');
    }
}
