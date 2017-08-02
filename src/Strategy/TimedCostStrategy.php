<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 02/08/2017
 * Time: 12:32
 */

namespace src\Strategy;
require_once 'src/Strategy/CostStrategy.php';

class TimedCostStrategy extends CostStrategy
{

    function cost(Lesson $lesson)
    {
        return $lesson->getDuration ( ) * 5 ;
    }

    function chargeType()
    {
        return "Почасовая оплата";
    }
}