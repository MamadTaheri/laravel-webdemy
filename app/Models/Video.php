<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $appends = ['url'];

    public function series()
    {
       return $this->belongsTo(Series::class);
    }

    public function getUrlAttribute()
    {
       return route('series.episode', [$this->series->title, $this->episode_number]);
    }
}
