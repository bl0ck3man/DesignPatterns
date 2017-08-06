<?php

require_once 'src/Singleton/Preferences.php';

$pref = \Singleton\Preferences::getInstance();

$pref->setProperty('some_key', 'some_value');
echo $pref->getProperty('some_key') . '\n';

unset($pref);

$pref2 = \Singleton\Preferences::getInstance();

echo $pref2->getProperty('some_key');

?>