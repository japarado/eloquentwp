<?php 

namespace EloquentWP\Models;

use Illuminate\Database\Eloquent\Model;
use EloquentWP\Models\User;

class Usermeta extends Model
{
    protected $table = 'usermeta';
    protected $primaryKey = 'umeta_id';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'ID');
    }
}
