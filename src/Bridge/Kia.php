<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 18:43
 */

namespace Bridge;


class Kia implements CarVendor
{
    private $vendor_name = "Kia";

    public function getVendorName()
    {
        return $this->vendor_name;
    }

}