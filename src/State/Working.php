<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 23:37
 */

namespace State;


class Working implements IState
{
    public function doSomething(Human $context)
    {
        echo 'работаю' . PHP_EOL;
        $context->setState(new WeekEnd());
    }
}