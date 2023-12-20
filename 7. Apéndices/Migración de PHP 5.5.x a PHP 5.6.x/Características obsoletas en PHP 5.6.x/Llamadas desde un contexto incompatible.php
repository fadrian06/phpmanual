<?php

class A {
  function f() {
    echo get_class($this);
  }
}

class B {
  function f() {
    A::f();
  }
}

(new B)->f();

/*
El resultado del ejemplo sería:
-------------------------------
Deprecated: Non-static method A::f() should not be called statically, assuming $this from incompatible context in - on line 7
B
 */
