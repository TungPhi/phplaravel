<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function posts()
{
	// protected $tale='<ten_bang>';
    return $this->hasMany(Post::class);
}
}
