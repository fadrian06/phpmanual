<?php

function sumar($a, $b, $c) {
  return $a + $b + $c;
}

$operadores = [2, 3];
echo sumar(1, ...$operadores); // 6
