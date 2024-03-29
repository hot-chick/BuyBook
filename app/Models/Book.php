<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'image',
        'price',
        'author',
        'genre_id',
        'age_limit_id',
    ];
}
