<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
   /**
     * Returns a User object. belongsTo() specifies a full namespace path to class
     *
     * @return User
     */
    public function user() 
    {        
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    
    protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];
}
