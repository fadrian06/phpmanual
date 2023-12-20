<?php

////////////////////////////////////////////////////
// list() ya no asigna variables en orden inverso //
////////////////////////////////////////////////////
/*
list() ahora asigna valores a variables en el orden en el que estas se
definen, en vez de en orden inverso. En general, esto solamente afecta
al caso donde list() se emplea junto con el operador de array [],
como se muestra a continuación:
 */

list($a[], $a[], $a[]) = [1, 2, 3];
var_dump($a);

/*
Salida del ejemplo anterior en PHP 5:
-------------------------------------
array(3) {
  [0]=>
  int(3)
  [1]=>
  int(2)
  [2]=>
  int(1)
}

Salida del ejemplo anterior en PHP 7:
-------------------------------------
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
 */

////////////////////////////////////////////////////////
// Se han eliminado las asignaciones vacías de list() //
////////////////////////////////////////////////////////
$a = [];
list() = $a;
list(,,) = $a;
list($x, list(), $y) = $a;

///////////////////////////////////////////
// list() no puede desempaquetar strings //
///////////////////////////////////////////
/*
list() ya no puede desempaquetar variables de tipo string.
Debería usarse str_split() en su lugar.
 */
