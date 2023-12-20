<?php

function f() {
  // Válido solamente en PHP 5.
  global $$foo->bar;

  // Válido en PHP 5 y 7.
  global ${$foo->bar};
}
