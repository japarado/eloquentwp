<?php 

namespace EloquentWP\Models;

use Illuminate\Database\Eloquent\Model;
use EloquentWP\Models\Term;

class Termmeta extends Model
{
    protected $table = 'termmeta';
    protected $primaryKey = 'meta_id';

    public function term()
    {
        return $this->belongsTo(Term::class, 'term_id', 'term_id');
    }
}
