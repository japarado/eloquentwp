<?php 

namespace EloquentWP\Models;

use Illuminate\Database\Eloquent\Model;
use EloquentWP\Models\Post;

class Postmeta extends Model
{
    protected $table = 'postmeta';
    protected $primaryKey = 'meta_id';

    public function posts()
    {
        return $this->belongsTo(Post::class, 'post_id', 'ID');
    }
}
