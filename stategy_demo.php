<?php

require_once 'src/Strategy/Seminar.php';
require_once 'src/Strategy/Lecture.php';
require_once 'src/Strategy/TimedCostStrategy.php';
require_once 'src/Strategy/FixedCostStrategy.php';

$lessons[] = new \src\Strategy\Seminar(4 , new \src\Strategy\TimedCostStrategy());
$lessons[] = new \src\Strategy\Lecture(4 , new \src\Strategy\FixedCostStrategy());

foreach ($lessons as $lesson) {
    print "Плата за занятие {$lesson->cost()} . ";
    print "Тип оплаты: {$lesson->chargeType() } \n";
}

?>