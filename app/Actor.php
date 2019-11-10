<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = ['name', 'birthday'];
    
    public function movies()
    {
    return $this->belongsToMany(Movie::class);
    }
}
