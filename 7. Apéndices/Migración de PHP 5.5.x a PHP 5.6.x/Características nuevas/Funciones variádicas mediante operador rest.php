<?php

function f($requerido, $opcional = null, ...$parámetros) {
  // $parámetros es un array que contiene los argumentos restantes.
  printf(
    '$requerido: %d; $opcional: %d; número de parámetros: %d' . "\n",
    $requerido,
    $opcional,
    count($parámetros)
  );
}

f(1);             // $requerido: 1; $opcional: 0; número de parámetros: 0
f(1, 2);          // $requerido: 1; $opcional: 2; número de parámetros: 0
f(1, 2, 3);       // $requerido: 1; $opcional: 2; número de parámetros: 1
f(1, 2, 3, 4);    // $requerido: 1; $opcional: 2; número de parámetros: 2
f(1, 2, 3, 4, 5); // $requerido: 1; $opcional: 2; número de parámetros: 3
