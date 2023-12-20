<?php

function obtenerArray() {
  return [1, 2, 3];
}

function arrayAlCuadrado(array &$a) {
  foreach ($a as &$v) {
    $v **= 2;
  }
}

// Genera una advertencia en PHP 7.
arrayAlCuadrado((obtenerArray()));
/* Notice: Only variables should be passed by reference ... */
