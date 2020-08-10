<?php

namespace App;

class Post extends Model
{
    public function comments()
    {
        // Relating comments to a post
        return $this->hasMany(Comments::class);
    }

    public function user()
    {
        // Relating the post to the user
        return $this->belongsTo(User::class);
    }

    public function addComment($body) 
    {
        // Adding comment to a post
        Comment::create([
            'body' => $body,
            'post_id' => $this->id
        ]);
    }

}
