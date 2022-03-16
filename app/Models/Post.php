<?php

namespace App\Models;

Use  \TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    Use Translatable;
    use HasFactory;
    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}


