<?php

///////////////////////////////////////////////////////
// Un string hexadecimal ya no se considera numérico //
///////////////////////////////////////////////////////
var_dump("0x123" == "291");
var_dump(is_numeric("0x123"));
var_dump("0xe" + "0x1");
var_dump(substr("foo", "0x1"));

/*
Salida del ejemplo anterior en PHP 5:
-------------------------------------
bool(true)
bool(true)
int(15)
string(2) "oo"

Salida del ejemplo anterior en PHP 7:
-------------------------------------
bool(false)
bool(false)
int(0)

Notice: A non well formed numeric value encountered in ...
string(3) "foo"
 */

/*
Se puede emplear filter_var() para comprobar si un string contiene un
numero hexadecimal, y también para convertir un string de dicho tipo en
un integer:
 */
$str = "0xffff";
$int = filter_var($str, FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_HEX);

if (false === $int) {
  throw new Exception("¡Número entero inválido!");
}

var_dump($int); // int(65535)

/////////////////////////////////
// \u{ puede ocasionar errores //
/////////////////////////////////
/*
Debido a la incorporación de la nueva sintaxis de escape de puntos de
código de Unicode, los string que contienen un literal \u{ seguido de
una secuencia inválida causarán un error fatal. Para evitarlo, se debería
escapar la barra inicial.
 */
