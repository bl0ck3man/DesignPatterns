<?php

namespace Factory_method;

/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 06/08/2017
 * Time: 21:23
 */
abstract class CommsManager
{
    abstract function getHeaderText();
    abstract function getFooterText();
    abstract function getApptEncoder();
}