<?php

namespace EloquentWP;

use Illuminate\Database\Capsule\Manager as Capsule;

class EloquentWP
{
    public static $prefix = 'wp_';

    public static function bootstrap()
    {
        $capsule = new Capsule();
        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => defined('DB_HOST') ? DB_HOST : 'localhost',
            'database' => defined('DB_NAME') ?  DB_NAME : 'jnr',
            'username' => defined('DB_USER') ? DB_USER : 'root',
            'password' => defined('DB_PASSWORD') ? DB_PASSWORD : '',
            'charset' => defined('DB_CHARSET') ? DB_CHARSET : 'utf8',
            'collation' => defined('DB_COLLATION') ? DB_COLLATION : 'utf8_unicode_ci',
            'prefix' => static::$prefix
        ]);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}
