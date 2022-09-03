<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory, SoftDeletes, Searchable;

    protected $filled = ['title', 'keywords', 'guid', 'excerpt', 'content', 'thumbnail'];

    // for read

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

    // for search
    /**
     * Get the name of the index associated with the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'posts_index';
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'keywords' => $this->keywords,
        ];
    }

    /**
     * Get the value used to index the model.
     *
     * @return mixed
     */
    public function getScoutKey()
    {
        return $this->id;
    }
}
