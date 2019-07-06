<?php 

namespace EloquentWP\Models;

use EloquentWP\Models\WPModel;
use EloquentWP\Models\Term;

class TermTaxonomy extends WPModel
{
    protected $table = 'term_taxonomy';
    protected $primaryKey = 'term_taxonomy_id';
    public $timestamps = false;

    public function term()
    {
        return $this->belongsTo(Term::class, 'term_id', 'term_id');
    }
}
