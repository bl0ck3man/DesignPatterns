<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 06/08/2017
 * Time: 21:27
 */

namespace Factory_method;

require_once 'src/Factory_method/BloggsApptEncoder.php';
require_once 'src/Factory_method/CommsManager.php';
require_once 'src/Factory_method/ApptEncoder.php';


class BloggsCommManager extends CommsManager
{

    function getHeaderText()
    {
        return "BloggsCal верхний колонтитул\n";
    }

    function getFooterText()
    {
        return "BloggsCal нижний колонтитул\n" ;
    }

    function getApptEncoder() : ApptEncoder
    {
        return new BloggsApptEncoder();
    }
}