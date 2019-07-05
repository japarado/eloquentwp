<?php 

namespace EloquentWP\Models;

use Illuminate\Database\Eloquent\Model;

class TermRelationship extends Model
{
    protected $table = 'term_relationships';
    protected $primaryKey = 'object_id';
}
