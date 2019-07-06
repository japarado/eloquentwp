<?php 

namespace EloquentWP\Models;

use EloquentWP\Models\WPModel;
use EloquentWP\Models\User;

class Usermeta extends WPModel
{
    protected $table = 'usermeta';
    protected $primaryKey = 'umeta_id';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'ID');
    }
}
