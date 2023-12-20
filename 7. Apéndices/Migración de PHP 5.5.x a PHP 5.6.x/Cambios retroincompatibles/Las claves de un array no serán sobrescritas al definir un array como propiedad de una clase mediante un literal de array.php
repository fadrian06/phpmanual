<?php

class C {
  const UNO = 1;
  public $array = [
    self::UNO => 'foo',
    'bar',
    'quux',
  ];
}

var_dump((new C)->array);

/*
Salida del ejemplo anterior en PHP 5.5:
---------------------------------------
array(2) {
  [0]=>
  string(3) "bar"
  [1]=>
  string(4) "quux"
}

Salida del ejemplo anterior en PHP 5.6:
---------------------------------------
array(3) {
  [1]=>
  string(3) "foo"
  [2]=>
  string(3) "bar"
  [3]=>
  string(4) "quux"
}
 */
