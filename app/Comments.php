<?php

namespace App;

class Comments extends Model
{
    public function post()
    {
        // Relating a post to its comments
        return $this->belongsTo(Post::class);
    }


    public function user(){
        // Relating a user to their comments
        return $this->belongsTo(User::class);
    }
}
