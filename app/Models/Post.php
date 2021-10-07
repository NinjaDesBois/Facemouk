<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function likes()
    {
       return $this->hasMany(Like::class);
    }
    public function users_likes(){
        return $this->belongsToMany(User::class, Like::class, 'post_id' , 'user_id');
    }
}
