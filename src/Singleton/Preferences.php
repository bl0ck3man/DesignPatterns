<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 06/08/2017
 * Time: 20:16
 */

namespace Singleton;


class Preferences
{
    private $property = array();
    private static $instance;

    private function __construct(){

    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Preferences();
        }

        return self::$instance;
    }

    public function getProperty($key)
    {
        return $this->property[$key];
    }

    public function setProperty($key, $val)
    {
        $this->property[$key] = $val;
    }

}