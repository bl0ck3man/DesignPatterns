<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 22/08/2017
 * Time: 00:27
 */

namespace Abstract_Factory;


class EnMouse implements Mouse
{
    public function click()
    {
        return 'mouse click';
    }

    public function dclick()
    {
        return 'mouse double click';
    }
}