<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 09/08/2017
 * Time: 14:11
 */

namespace Prototype;


abstract class Sea
{
    private $navigability = 0;

    public function __construct($navigability)
    {
        $this->navigability = $navigability;
    }
}