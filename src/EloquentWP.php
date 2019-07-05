<?php

namespace EloquentWP;

use Illuminate\Database\Capsule\Manager as Capsule;

class EloquentWP
{
    const DRIVER = 'mysql';
    public static $host = 'localhost';
    public static $database;
    public static $username = 'root';
    public static $password = '';
    public static $charset = 'utf8';
    public static $collation = 'utf8_unicode_ci';
    public static $prefix = '_wp';

    public static function bootstrap()
    {
        $capsule = new Capsule();
        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => defined('DB_HOST') ? DB_HOST : static::$host,
            'database' => defined('DB_NAME') ?  DB_NAME : static::$database,
            'username' => defined('DB_USER') ? DB_USER : static::$username,
            'password' => defined('DB_PASSWORD') ? DB_PASSWORD : static::$password,
            'charset' => defined('DB_CHARSET') ? DB_CHARSET : static::$charset,
            'collation' => defined('DB_COLLATION') ? DB_COLLATION : static::$collation,
            'prefix' => static::$prefix
        ]);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}
