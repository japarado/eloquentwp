<?php 

namespace EloquentWP\Models;

use Illuminate\Database\Eloquent\Model;
use EloquentWP\Models\Post;
use EloquentWP\Models\Usermeta;
use EloquentWP\Models\Comment;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'ID';

    public function posts()
    {
        return $this->hasMany(Post::class, 'post_author', 'ID');
    }

    public function usermeta()
    {
        return $this->hasMany(Usermeta::class, 'user_id', 'ID');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id', 'ID');
    }
}
