<?php

namespace App;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function addComment($body) 
    {
        Comment::create([
            'body' => $body,
            'post_id' => $this->id
        ]);
    }

}
