<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 00:28
 */

namespace Abstract_Factory;


class EnKeyboard implements Keyboard
{
    public function pageUp()
    {
        return 'page Up';
    }

    public function pageDown()
    {
        return 'page down';
    }
}