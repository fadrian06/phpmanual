<?php

$foo = new class {
  function bar() {
    echo __METHOD__;
  }
};

(clone $foo)->bar();
