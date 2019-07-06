<?php 

namespace EloquentWP\Models;

use EloquentWP\Models\WPModel;

class Link extends WPModel
{
    protected $table = 'links';
    protected $primaryKey = 'link_id';
    public $timestamps = false;
}
