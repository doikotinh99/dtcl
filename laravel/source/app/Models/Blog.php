<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "content"
    ];

    public function images(){
        return $this->morphOne(Image::class, "imageble");
    }
    public function comments(){
        return $this->morphOne(Comment::class, "commentable");
    }
    public function user(){
        return $this->hasOne(User::class);
    }
}
