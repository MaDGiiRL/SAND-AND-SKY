<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'body', 'img', 'user_id', 'category_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
