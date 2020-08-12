<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function users(){
        return $this->belongsToMany(User::class);
    } 
    
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
