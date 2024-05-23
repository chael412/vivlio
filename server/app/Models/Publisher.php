<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;
    protected $fillable = [
        'author_name'
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_publishers', 'publisher_id', 'book_id');
    }
}
