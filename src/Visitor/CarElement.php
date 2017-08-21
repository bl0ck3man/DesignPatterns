<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 21/08/2017
 * Time: 23:11
 */

namespace Visitor;


abstract class CarElement
{
    public function accept(CarElementVisitor $visitor){
        $visitor->visit($this);
    }

    abstract function getName();
}