<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 00:17
 */

namespace Abstract_Factory;


class EnDeviceFactory extends AbstractDeviceFactory
{

    function getMouse() : Mouse
    {
        return new EnMouse();
    }

    function getKeyboard() : Keyboard
    {
        return new EnKeyBoard();
    }

    function getTouchPad() : TouchPad
    {
        return new EnTouch();
    }
}