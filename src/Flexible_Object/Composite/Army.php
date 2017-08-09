<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 09/08/2017
 * Time: 15:16
 */

namespace Flexible_Object\Composite;

require_once 'src/Flexible_Object/Composite/Unit.php';

class Army extends Unit
{
    private $units = array();

    public function addUnit(Unit $unit)
    {
        if (in_array($unit, $this->units, true)) {
            return;
        }

        $this->units[] = $unit;
    }

    public function removeUnit(Unit $unit)
    {
        $idx = array_search($unit, $this->units, true);
        if (is_int($idx)) {
            array_splice($this->units, $idx, 1, []);
        }
    }

    public function bombardStrength()
    {
        $ret = 0;

        foreach ($this->units as $unit) {

            $ret += $unit->bombardStrength();
        }

        return $ret;
    }
}