<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'likes'
    ];

    // realtion for comments (one to many)
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
