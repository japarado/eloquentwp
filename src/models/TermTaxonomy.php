<?php 

namespace EloquentWP\Models;

use EloquentWP\Models\Term;
use Illuminate\Database\Eloquent\Model;

class TermTaxonomy extends Model
{
    protected $table = 'term_taxonomy';
    protected $primaryKey = 'term_taxonomy_id';

    public function term()
    {
        return $this->belongsTo(Term::class, 'term_id', 'term_id');
    }
}
