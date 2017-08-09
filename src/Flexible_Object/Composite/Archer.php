<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 09/08/2017
 * Time: 15:13
 */

namespace Flexible_Object\Composite;

require_once 'src/Flexible_Object/Composite/Unit.php';

class Archer extends Unit
{
    function bombardStrength()
    {
        return 4;
    }
}