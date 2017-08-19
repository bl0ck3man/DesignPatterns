<?php

function my_value($link) {
    $link++;
    return $link;
}

function my_link(&$link) {
    $link++;
    return $link;
}

$var = 2;

assert($var === 2);

my_value($var);
assert($var === 2);

my_link($var);
assert($var === 3);

$a = '1';
$a[$a] = '2';
echo $a;