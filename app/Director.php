<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $fillable = ['name', 'birthday'];
    
    public function Movies()
    {
    return $this->hasMany(Movie::class);
    }
}
