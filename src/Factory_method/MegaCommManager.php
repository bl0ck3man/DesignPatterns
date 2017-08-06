<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 06/08/2017
 * Time: 21:27
 */

namespace Factory_method;

require_once 'src/Factory_method/MegaApptEncoder.php';
require_once 'src/Factory_method/CommsManager.php';
require_once 'src/Factory_method/ApptEncoder.php';


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