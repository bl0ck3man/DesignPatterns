<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 06/08/2017
 * Time: 21:31
 */

namespace Factory_method;

class BloggsApptEncoder extends ApptEncoder
{
    public function encode()
    {
        return "Данные о встрече закодированы в формате BloggsCal \n";
    }
}