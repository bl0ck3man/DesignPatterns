<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 21/08/2017
 * Time: 23:14
 */

namespace Visitor;


class Body extends CarElement
{
    private $name = 'кузов';

    public function getName()
    {
        return $this->name;
    }
}