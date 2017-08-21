<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 00:18
 */

namespace Abstract_Factory;

class RuDeviceFactory extends AbstractDeviceFactory
{
    function getMouse() : Mouse
    {
        return new RuMouse();
    }

    function getKeyboard() : Keyboard
    {
        return new RuKeyBoard();
    }

    function getTouchPad() : TouchPad
    {
        return new RuTouch();
    }

}