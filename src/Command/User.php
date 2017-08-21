<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 21/08/2017
 * Time: 23:57
 */

namespace Command;


class User
{
    private $startCommand;
    private $stopCommand;
    private $resetCommand;

    /**
     * Involker constructor.
     * @param $startCommand
     * @param $stopCommand
     * @param $resetCommand
     */
    public function __construct(StartCommand $startCommand, StopCommand $stopCommand, ResetCommand $resetCommand)
    {
        $this->startCommand = $startCommand;
        $this->stopCommand = $stopCommand;
        $this->resetCommand = $resetCommand;
    }

    public function startComputer()
    {
        return $this->startCommand->execute();
    }

    public function stopComputer()
    {
        return $this->stopCommand->execute();
    }

    public function resetComputer()
    {
        return $this->resetCommand->execute();
    }

}