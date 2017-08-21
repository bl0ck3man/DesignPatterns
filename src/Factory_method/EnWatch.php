<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 00:51
 */

namespace Factory_method;


class EnWatch implements IWatch
{
    public function tick()
    {
       return 'англиский часы';
    }
}