<?php 

namespace EloquentWP\Models;

use EloquentWP\Models\WPModel;
use EloquentWP\Models\Post;

class Postmeta extends WPModel
{
    protected $table = 'postmeta';
    protected $primaryKey = 'meta_id';
    public $timestamps = false;

    public function posts()
    {
        return $this->belongsTo(Post::class, 'post_id', 'ID');
    }
}
