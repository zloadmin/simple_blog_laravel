<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id', 'comment', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
