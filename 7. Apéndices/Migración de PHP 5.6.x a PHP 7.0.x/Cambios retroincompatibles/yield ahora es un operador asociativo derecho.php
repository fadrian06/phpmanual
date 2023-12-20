<?php

(function () {
  $foo = null;

  echo yield -1;
  // Anteriormente era interpretado como
  echo (yield) - 1;
  // Y ahora es intrepretado como
  echo yield (-1);

  yield $foo or die;
  // Anteriormente era interpretado como
  yield ($foo or die);
  // Y ahora es intrepretado como
  (yield $foo) or die;
})();

// Los paréntesis se pueden emplear para desambiguar estos casos.
