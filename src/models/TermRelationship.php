<?php 

namespace EloquentWP\Models;

use EloquentWP\Models\WPModel;

class TermRelationship extends WPModel
{
    protected $table = 'term_relationships';
    protected $primaryKey = 'object_id';
    public $timestamps = false;
}
