<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'content',
        'likes'
    ];

    // realtion for comments (one to many)
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // realtion for user (one to many inverse)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
