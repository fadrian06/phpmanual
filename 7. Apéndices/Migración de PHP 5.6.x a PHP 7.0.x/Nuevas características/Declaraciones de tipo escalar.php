<?php

// Modo coercitivo
function sumaDeEnteros(int ...$enteros) {
  return array_sum($enteros);
}

var_dump(sumaDeEnteros(2, '3', 4.1)); // int(9)
