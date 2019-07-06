<?php 

namespace EloquentWP\Models;

use EloquentWP\Models\WPModel;

class Option extends WPModel
{
    protected $table = 'options';
    public $timestamps = false;
    protected $primaryKey = 'option_id';
}

