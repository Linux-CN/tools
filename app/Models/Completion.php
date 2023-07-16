<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Completion extends Model
{
    use HasFactory,SoftDeletes;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
