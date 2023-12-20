<?php

function sumarArrays(array ...$arrays): array {
  return array_map(function (array $array): int {
    return array_sum($array);
  }, $arrays);
}

print_r(sumarArrays([1, 2, 3], [4, 5, 6], [7, 8, 9]));

/*
El resultado del ejemplo sería:
-------------------------------
Array
(
    [0] => 6
    [1] => 15
    [2] => 24
)
 */
