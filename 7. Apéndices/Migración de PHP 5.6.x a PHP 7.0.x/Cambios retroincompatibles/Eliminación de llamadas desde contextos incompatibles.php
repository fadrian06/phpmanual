<?php

class A {
  public function prueba() {
    var_dump($this);
  }
}

// Nota: NO extiende a A
class B {
  public function llamadaAMétodoNoEstáticoDeA() {
    A::prueba();
  }
}

(new B)->llamadaAMétodoNoEstáticoDeA();

/*
Salida del ejemplo anterior en PHP 5.6:
---------------------------------------
Deprecated: Non-static method A::prueba() should not be called statically, assuming $this from incompatible context ...
object(B)#1 (0) {
}

Salida del ejemplo anterior en PHP 7:
-------------------------------------
Deprecated: Non-static method A::prueba() should not be called statically ...
Notice: Undefined variable: this ...
NULL
 */
