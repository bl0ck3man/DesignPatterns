<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 21/08/2017
 * Time: 23:12
 */

namespace Visitor;


class CarElementVisitor
{
    public function visit(CarElement $element)
    {
        return $element->getName();
    }
}