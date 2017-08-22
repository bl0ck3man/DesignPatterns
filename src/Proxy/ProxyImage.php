<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 18:11
 */

namespace Proxy;


class ProxyImage implements Image
{
    private $RealImage;
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function display()
    {
        if (is_null($this->RealImage)) {
            $this->RealImage = new RealImage($this->file);
        }

        return $this->RealImage->display();
    }
}