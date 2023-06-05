<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentsSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    // use Sluggable;

    public function user()
    { 
        return $this->belongsTo(User::class);
    }
}