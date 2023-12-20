<?php

function foo($x) {
  $x++;
  var_dump(func_get_arg(0));
}

foo(1);

/*
Salida del ejemplo anterior en PHP 5:
-------------------------------------
1

Salida del ejemplo anterior en PHP 7:
-------------------------------------
2
 */
