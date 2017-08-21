<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 00:30
 */

namespace Abstract_Factory;


class EnTouch implements TouchPad
{
    public function touch()
    {
       return 'eng touch';
    }
}