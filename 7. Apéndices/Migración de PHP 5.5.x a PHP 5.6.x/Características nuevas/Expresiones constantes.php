<?php

const UNO = 1;
const DOS = UNO * 2;

class C {
  const TRES = DOS + 1;
  const UN_TERCIO = UNO / self::TRES;
  const SENTENCE = 'El valor de TRES es ' . self::TRES;

  public function f($a = UNO + self::TRES) {
    return $a;
  }
}

echo (new C)->f() . "\n"; // 4
echo C::SENTENCE;         // El valor de TRES es 3
