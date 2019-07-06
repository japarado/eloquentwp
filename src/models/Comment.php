<?php 

namespace EloquentWP\Models;

use EloquentWP\Models\WPModel;
use EloquentWP\Models\Post;
use EloquentWP\Models\Commentmeta;

class Comment extends WPModel
{
    protected $table = 'comments';
    protected $primaryKey = 'comment_ID';

    public function post()
    {
        return $this->belongsTo(Post::class, 'comment_post_ID', 'ID');
    }

    public function commentmeta()
    {
        return $this->hasMany(Commentmeta::class, 'comment_id', 'comment_ID');
    }
}
