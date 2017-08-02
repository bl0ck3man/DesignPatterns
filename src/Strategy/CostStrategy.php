<?php

namespace src\Strategy;

abstract class CostStrategy
{
    abstract function cost(Lesson $lesson);

    abstract function chargeType();
}