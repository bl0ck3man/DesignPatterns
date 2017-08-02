<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 02/08/2017
 * Time: 12:33
 */

namespace src\Strategy;
require_once 'src/Strategy/CostStrategy.php';

class FixedCostStrategy extends CostStrategy
{

    function cost(Lesson $lesson)
    {
       return 30;
    }

    function chargeType()
    {
       return 'Фиксированная ставка';
    }
}