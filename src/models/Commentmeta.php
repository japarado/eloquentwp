<?php

namespace EloquentWP\Models;

use Illuminate\Database\Eloquent\Model;
use EloquentWP\Models\Comment;

class Commentmeta extends Model
{
    protected $table = 'commentmeta';
    protected $primaryKey = 'meta_id' ;

    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comment_id', 'comment_ID');
    }
}
