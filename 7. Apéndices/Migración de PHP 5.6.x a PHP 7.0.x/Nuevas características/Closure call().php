<?php

class A {
  private $x = 1;

  function getX(): int {
    return $this->x;
  }
}

// Código anterior a PHP 7
$getX = function () {
  return $this->x;
};

$getXCB = $getX->bindTo(new A, 'A'); // cierre intermedio
echo $getXCB(); // 1

// Código de PHP 7+
$getX = function () {
  return $this->x;
};

echo $getX->call(new A); // 1
