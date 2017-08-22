<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 18:44
 */

namespace Bridge;


class Ford implements CarVendor
{
    private $vendor_name = "Ford";

    public function getVendorName()
    {
        return $this->vendor_name;
    }
}