<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 00:48
 */

namespace Factory_method;

class EnFactoryWatch implements IFactory
{
    public function getWatch() : IWatch
    {
        return new EnWatch();
    }
}