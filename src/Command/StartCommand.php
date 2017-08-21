<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 21/08/2017
 * Time: 23:50
 */

namespace Command;


class StartCommand extends Command
{
    public function execute()
    {
        return $this->getComputer()->start();
    }
}