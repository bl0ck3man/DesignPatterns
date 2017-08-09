<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 09/08/2017
 * Time: 15:11
 */

namespace Flexible_Object\Composite;

require_once 'src/Flexible_Object/Composite/UnitException.php';

abstract class Unit
{
    abstract function bombardStrength();

    public function addUnit(Unit $unit)
    {
        throw new UnitException(get_class($this) . " is a leaf");
    }
    public function removeUnit(Unit $unit)
    {
        throw new UnitException(get_class($this) . " is a leaf");
    }
}