<?php

namespace App;

class Comments extends Model
{
    public function post(){
        return $this->belongsTo(Post::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
}
