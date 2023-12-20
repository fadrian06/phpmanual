<?php

$gen = (function () {
  yield 1;
  yield 2;

  return 3;
})();

foreach ($gen as $val) {
  echo $val, PHP_EOL;
}

echo $gen->getReturn(), PHP_EOL;

/*
El resultado del ejemplo sería:
-------------------------------
1
2
3
 */
