<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'cover_image',
        'author_id',
        'published_year',
        'is_available',
        'isbn',
    ];

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function borrows(){
        return $this->hasMany(Borrow::class);
    }
}
