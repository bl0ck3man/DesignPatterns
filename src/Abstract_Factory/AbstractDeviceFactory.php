<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 00:16
 */

namespace Abstract_Factory;


abstract class AbstractDeviceFactory
{
    abstract function getMouse();
    abstract function getKeyboard();
    abstract function getTouchPad();
}