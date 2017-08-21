<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 06/08/2017
 * Time: 21:27
 */

namespace Factory_method;

class MegaCommManager extends CommsManager
{

    function getHeaderText()
    {
        return "MegaCal верхний колонтитул\n";
    }

    function getFooterText()
    {
        return "MegaCal нижний колонтитул\n" ;
    }

    function getApptEncoder() : ApptEncoder
    {
        return new MegaApptEncoder();
    }
}