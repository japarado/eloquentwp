<?php

namespace EloquentWP\Models;

use EloquentWP\Models\Termmeta;
use EloquentWP\Models\TermTaxonomy;
use EloquentWP\Models\WPModel;

class Term extends WPModel 
{
    protected $table = 'terms';
    protected $primaryKey = 'term_id';
    public $timestamps = false;

    public function termmeta()
    {
        return $this->hasMany(Termmeta::class, 'term_id', 'term_id');
    }

    public function termTaxonomies()
    {
        return $this->hasMany(TermTaxonomy::class, 'term_id', 'term_id');
    }
}
