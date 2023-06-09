<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    // use Sluggable;
    use SluggableScopeHelpers;

    protected $fillable = ['title', 'slug', 'description', 'image_path', 'user_id'];
    
 
    public function user()
    { 
        return $this->belongsTo(User::class);
    }
}
