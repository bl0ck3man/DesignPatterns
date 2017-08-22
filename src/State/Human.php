<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 23:35
 */

namespace State;


class Human
{
    private $state;

    public function setState(IState $state)
    {
        $this->state = $state;
    }

    public function doSomething()
    {
        return $this->state->doSomething($this);
    }

}