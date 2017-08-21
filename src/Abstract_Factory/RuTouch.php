<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 00:29
 */

namespace Abstract_Factory;


class RuTouch implements TouchPad
{
    public function touch()
    {
        return 'русский тач';
    }
}