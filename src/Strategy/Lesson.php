<?php

namespace src\Strategy;

abstract class Lesson
{
    private $duration;
    private $costStrategy;

    public function __construct($duration, CostStrategy $strategy)
    {
        $this->duration     = $duration;
        $this->costStrategy = $strategy;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function chargeType()
    {
        return $this->costStrategy->chargeType();
    }

    public function cost()
    {
        return $this->costStrategy->cost($this);
    }

}
