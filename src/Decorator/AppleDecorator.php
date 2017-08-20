<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 20/08/2017
 * Time: 12:09
 */

namespace Decorator;


class AppleDecorator extends FruitDecorator
{
    private $place = 'tree';

    function getWeight()
    {
       return $this->fruit->getWeight() * 2;
    }

    public function getPlace()
    {
        return $this->place;
    }
}