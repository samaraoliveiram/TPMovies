<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'sinopsys', 'director_id'];

    public function director()
    {
    return $this->belongsTo(Director::class);
    }

    public function actors()
    {
    return $this->belongsToMany(Actor::class);
    }
}
