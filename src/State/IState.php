<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 23:37
 */

namespace State;


interface IState
{
    public function doSomething(Human $human);
}