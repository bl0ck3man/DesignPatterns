<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 21/08/2017
 * Time: 23:50
 */

namespace Command;


abstract class Command
{
    private $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function getComputer()
    {
        return $this->computer;
    }

    abstract function execute();
}