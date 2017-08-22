<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 18:08
 */

namespace Proxy;


class RealImage implements Image
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
        $this->display();
    }

    public function display()
    {
        return 'Показ файла ' . $this->file;
    }
}