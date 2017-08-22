<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 18:42
 */

namespace Bridge;


abstract class Car
{
   protected $carVendor;
   protected static $body_type = 'кузов';

   public function __construct(CarVendor $carVendor)
   {
       $this->carVendor = $carVendor;
   }

   public function getDetails() {
       return static::$body_type . ' ' . $this->carVendor->getVendorName();
   }
}