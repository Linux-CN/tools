<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function getLinkAttribute()
    {
        return route('category.show', ['category' => $this->id]);
    }
}
