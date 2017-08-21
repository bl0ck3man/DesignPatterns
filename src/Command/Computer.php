<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 21/08/2017
 * Time: 23:49
 */

namespace Command;


class Computer
{
    public function start()
    {
        return 'start';
    }

    public function stop()
    {
        return 'stop';
    }

    public function reset()
    {
        return 'reset';
    }
}