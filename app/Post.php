<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'short_story', 'full_story', 'image'];

    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

}
