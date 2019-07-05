<?php

namespace EloquentWP\Models;

use EloquentWP\Models\Termmeta;
use EloquentWP\Models\TermTaxonomy;
use Illuminate\Database\Eloquent\Model;

class Term extends Model 
{
    protected $table = 'terms';
    protected $primaryKey = 'term_id';

    public function termmeta()
    {
        return $this->hasMany(Termmeta::class, 'term_id', 'term_id');
    }

    public function termTaxonomies()
    {
        return $this->hasMany(TermTaxonomy::class, 'term_id', 'term_id');
    }
}
