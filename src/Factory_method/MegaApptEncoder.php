<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 06/08/2017
 * Time: 21:31
 */

namespace Factory_method;


require_once 'src/Factory_method/ApptEncoder.php';

class MegaApptEncoder extends ApptEncoder
{
    public function encode()
    {
        return "Данные о встрече закодированы в формате MegaCal \n";
    }
}