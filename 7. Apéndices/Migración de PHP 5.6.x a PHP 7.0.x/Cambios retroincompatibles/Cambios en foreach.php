<?php

///////////////////////////////////////////////////////
// foreach ya no cambia el puntero de arrays interno //
///////////////////////////////////////////////////////
$array = [0, 1, 2];

foreach ($array as &$val) {
  var_dump(current($array));
}

/*
Salida del ejemplo anterior en PHP 5:
-------------------------------------
int(1)
int(2)
bool(false)

Salida del ejemplo anterior en PHP 7:
-------------------------------------
int(0)
int(0)
int(0)
 */

///////////////////////////////////////////////////////////////////////
// La iteración de foreach por valor opera sobre una copia del array //
///////////////////////////////////////////////////////////////////////
/*
Al utilizar el modo predeterminado de iteración por valor, foreach
ahora opera sobre una copia del array a recorrer en lugar del array en
sí. Esto significa que los cambios realizados a un array durante una
iteración no afectarán a los valores que se recorren.
 */

////////////////////////////////////////////////////////////////////////////////
// Se ha mejorado el comportamiento de la iteración de foreach por referencia //
////////////////////////////////////////////////////////////////////////////////
$array = [0];

foreach ($array as &$val) {
  var_dump($val);
  $array[1] = 1;
}

/*
Salida del ejemplo anterior en PHP 5:
-------------------------------------
int(0)

Salida del ejemplo anterior en PHP 7:
-------------------------------------
int(0)
int(1)
 */

//////////////////////////////////////////
// Iteración de objetos no Traversables //
//////////////////////////////////////////
/*
Recorrer un objeto no Traversable ahora tendrá el mismo comportamiento
que recorrer arrays por referencia. Esto resulta en que la mejora del
comportamiento al modificar un array durante la iteración se aplique
también cuando se añaden propiedades a o se eleminan de un objeto.
 */
