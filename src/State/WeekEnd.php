<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 23:42
 */

namespace State;


class WeekEnd implements IState
{
    private $count = 0;

    public function doSomething(Human $context)
    {
        if ($this->count < 3) {
            $this->count++;
            echo 'отдыхаю ' . PHP_EOL;
        } else {
            $this->count = 0;
            $context->setState(new Working());
        }
    }
}