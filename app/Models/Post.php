<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
use Illuminate\Support\Arr;

class Post extends Model
{
    use HasFactory, SoftDeletes, Searchable;

    protected $filled = ['title', 'keywords', 'guid', 'excerpt', 'content', 'thumbnail'];
    protected $searchIndex = ["title", "excerpt", "content", "keywords"];

    public function author(){
        return $this->belongsTo(User::class,"user_id");
    }

    public function getCreatedAtAttribute($date)
    {
        if (Carbon::now() > Carbon::parse($date)->addDays(15)) {
            return Carbon::parse($date);
        }
        return Carbon::parse($date)->diffForHumans();
    }
    /**
     * generate link for post show
     */
    public function getLinkAttribute(){
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
