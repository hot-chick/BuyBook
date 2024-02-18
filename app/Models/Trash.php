<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trash extends Model
{
    protected $fillable = [
        'trash_id',
        'user_id',
        'book_id',
        'updated_at',
        'created_at',
        
    ];
}
