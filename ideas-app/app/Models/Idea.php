<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    //eager load
    protected $with = ['user:id,name,image', 'comments.user:id,name,image'];

    protected $fillable = [
        'user_id',
        'content',
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

    // many to many relation
    public function likes()
    {
        return $this->belongsToMany(User::class, 'idea_like')->withTimestamps();
    }
}
