<?php

use Factory_method\BloggsCommManager;
use Factory_method\MegaCommManager;

function __autoload($className)
{
    $className = str_replace('\\', '/', $className);
    require_once 'src/' . $className .'.php';
}

$bloggs = new BloggsCommManager();
echo $bloggs->getHeaderText();
echo $bloggs->getApptEncoder()->encode();
echo $bloggs->getFooterText();

$mega = new MegaCommManager();
echo $mega->getHeaderText();
echo $mega->getApptEncoder()->encode();
echo $mega->getFooterText();

