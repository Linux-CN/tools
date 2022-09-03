<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;
use Laravel\Scout\Searchable;
use App\Casts\CreatedAt;

class Post extends Model
{
    use HasFactory, SoftDeletes, Searchable;

    protected $filled = ['title', 'keywords', 'guid', 'excerpt', 'content', 'thumbnail'];
    protected $searchIndex = ["title", "excerpt", "content", "keywords"];

    protected $casts = [
        'created_at' => CreatedAt::class,
    ];

    public function author()
    {
        return $this->belongsTo(User::class, "user_id");
    }
    /**
     * generate link for post show
     */
    public function getLinkAttribute()
    {
        return route('post.show', ['post' => $this->id]);
    }

    public function searchableAs()
    {
        return 'posts_index';
    }
    public function toSearchableArray()
    {
        return Arr::only($this->toArray(), $this->searchIndex);
    }
    public function getScoutKey()
    {
        return $this->id;
    }
}
