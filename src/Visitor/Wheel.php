<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 21/08/2017
 * Time: 23:15
 */

namespace Visitor;

class Wheel extends CarElement
{
    private $name = 'колесо';

    public function getName()
    {
        return $this->name;
    }
}