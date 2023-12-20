<?php

$array = [];
$array["a"] = &$array["b"];
$array["b"] = 1;
var_dump($array);

/*
Salida del ejemplo anterior en PHP 5:
-------------------------------------
array(2) {
  ["b"]=>
  &int(1)
  ["a"]=>
  &int(1)
}

Salida del ejemplo anterior en PHP 7:
-------------------------------------
array(2) {
  ["a"]=>
  &int(1)
  ["b"]=>
  &int(1)
}
 */
