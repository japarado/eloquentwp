<?php

namespace EloquentWP\Models;

use EloquentWP\Models\WPModel;
use EloquentWP\Models\Comment;

class Commentmeta extends WPModel
{
    protected $table = 'commentmeta';
    protected $primaryKey = 'meta_id' ;
    public $timestamps = false;

    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comment_id', 'comment_ID');
    }
}
