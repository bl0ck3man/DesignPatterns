<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 00:28
 */

namespace Abstract_Factory;


class RuKeyboard implements Keyboard
{

    public function pageUp()
    {
        return 'Страница вверх';
    }

    public function pageDown()
    {
        return 'Страница вниз';
    }
}