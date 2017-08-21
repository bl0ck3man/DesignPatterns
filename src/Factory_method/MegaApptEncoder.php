<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 06/08/2017
 * Time: 21:31
 */

namespace Factory_method;

class MegaApptEncoder extends ApptEncoder
{
    public function encode()
    {
        return "Данные о встрече закодированы в формате MegaCal \n";
    }
}