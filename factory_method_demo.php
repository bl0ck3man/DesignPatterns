<?php

require_once 'src/Factory_method/BloggsCommManager.php';
require_once 'src/Factory_method/MegaCommManager.php';

$bloggs = new \Factory_method\BloggsCommManager();
echo $bloggs->getHeaderText();
echo $bloggs->getApptEncoder()->encode();
echo $bloggs->getFooterText();

$mega = new \Factory_method\MegaCommManager();
echo $mega->getHeaderText();
echo $mega->getApptEncoder()->encode();
echo $mega->getFooterText();

?>