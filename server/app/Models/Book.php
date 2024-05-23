<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'call_no',
        'isbn',
        'accession_no',
        'edition',
        'physical_description',
        'volume',
        'notes'
    ];


    public function authors()
    {
        return $this->belongsToMany(Author::class, 'book_authors', 'book_id', 'author_id');
    }


    public function publishers()
    {
        return $this->belongsToMany(Publisher::class, 'book_publishers', 'book_id', 'publisher_id');
    }
}
