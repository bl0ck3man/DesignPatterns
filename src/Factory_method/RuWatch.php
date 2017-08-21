<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 00:50
 */

namespace Factory_method;


class RuWatch implements IWatch
{
    public function tick()
    {
       return 'русские часы';
    }
}