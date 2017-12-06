<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function comments() 
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    protected $guarded = ['id'];
}
