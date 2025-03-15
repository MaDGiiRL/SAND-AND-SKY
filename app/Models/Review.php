<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['name', 'title', 'comment', 'rating', 'img', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
