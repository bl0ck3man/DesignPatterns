<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 00:26
 */

namespace Abstract_Factory;

class RuMouse implements Mouse
{
    public function click()
    {
        return 'мышка клик';
    }

    public function dclick()
    {
        return 'мышка двойной клик';
    }
}