<?php 

namespace EloquentWP\Models;

use EloquentWP\Models\WPModel;
use EloquentWP\Models\Term;

class Termmeta extends WPModel
{
    protected $table = 'termmeta';
    protected $primaryKey = 'meta_id';
    public $timestamps = false;

    public function term()
    {
        return $this->belongsTo(Term::class, 'term_id', 'term_id');
    }
}
