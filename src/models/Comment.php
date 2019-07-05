<?php 

namespace EloquentWP\Models;

use Illuminate\Database\Eloquent\Model;
use EloquentWP\Models\Post;
use EloquentWP\Models\Commentmeta;

class Comment extends Model
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
