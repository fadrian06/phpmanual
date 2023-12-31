<?php

class A {
  private $A; //  Este campo se convertirá en '\0A\0A'

  function getA(): mixed {
    if (isset($this->A)) {
      return $this->A;
    }

    return null;
  }
}

class B extends A {
  private $A; // Este campo se convertirá en '\0B\0A'
  public $AA; // Este campo se convertirá en 'AA'

  function getA(): mixed {
    if (isset($this->A)) {
      return $this->A;
    }

    return null;
  }
}

var_dump((array) new B);

// Si convierte un valor null a array, obtiene un array vacío.
var_dump((array) null); // array(0) {}
