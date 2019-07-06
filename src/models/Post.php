<?php

namespace EloquentWP\Models;

use EloquentWP\Models\WPModel;
use EloquentWP\Models\Postmeta;
use EloquentWP\Models\Comment;
use EloquentWP\Models\User;

class Post extends WPModel
{
    protected $table = 'posts';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    public function postmeta()
    {
        return $this->hasMany(Postmeta::class, 'post_id', 'ID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'post_author', 'ID');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'comment_post_ID', 'ID');
    }
}

