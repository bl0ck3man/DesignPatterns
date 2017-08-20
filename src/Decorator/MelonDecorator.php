<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 20/08/2017
 * Time: 12:15
 */

namespace Decorator;

class MelonDecorator extends FruitDecorator
{
    private $another_prop = 'another_prop';

    function getWeight()
    {
        return $this->fruit->getWeight();
    }

    public function getAnotherProp()
    {
        return $this->another_prop;
    }
}