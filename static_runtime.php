<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 19:04
 */

abstract class Model {
    protected static $table = 'table';
    public static function getTable() {
        return static::$table;
    }
}

class User extends Model {
    public static $table = 'users';
}

echo User::getTable() . PHP_EOL;