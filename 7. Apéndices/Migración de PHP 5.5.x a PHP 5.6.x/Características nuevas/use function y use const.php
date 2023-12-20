<?php

namespace Espacio\De\Nombres {
  const FOO = 42;

  function f() {
    echo __FUNCTION__ . "\n";
  }
}

namespace {

  use const Espacio\De\Nombres\FOO;
  use function Espacio\De\Nombres\f;

  echo FOO . "\n"; // 42
  f();             // Espacio\De\Nombres\f
}
