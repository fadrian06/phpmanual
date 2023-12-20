<?php

//////////////////////////////////
// Literales de octal inválidos //
//////////////////////////////////
/*
Previamente, los literales de octal que contenían números inválidos
eran truncados silenciosamente (0128 era tomado como 012). Ahora,
un literal de octal inválido causará un error de análisis.
 */

///////////////////////////////////////
// Desplazamientos negativos de bits //
///////////////////////////////////////
var_dump(1 >> -1);

/*
Salida del ejemplo anterior en PHP 5:
-------------------------------------
int(0)

Salida del ejemplo anterior en PHP 7:
-------------------------------------
Fatal error: Uncaught ArithmeticError: Bit shift by negative number ...
 */

////////////////////////////////////////////
// Desplazamientos de bits fuera de rango //
////////////////////////////////////////////
/*
Los desplazamientos de bits (en cualquier dirección) fuera del ancho de
bit de un integer siempre resultarán en 0. Anteriormente, el
comportamiento de dichos desplazamientos dependía de la arquitectura.
 */

/////////////////////////////////////
// Cambios en la División por Cero //
/////////////////////////////////////
var_dump(3 / 0);
var_dump(0 / 0);
var_dump(0 % 0);

/*
Salida del ejemplo anterior en PHP 5:
-------------------------------------
Warning: Division by zero in %s on line %d
bool(false)

Warning: Division by zero in %s on line %d
bool(false)

Warning: Division by zero in %s on line %d
bool(false)

Salida del ejemplo anterior en PHP 7:
-------------------------------------
Warning: Division by zero in %s on line %d
float(INF)

Warning: Division by zero in %s on line %d
float(NAN)

PHP Fatal error:  Uncaught DivisionByZeroError: Modulo by zero in %s line %d
 */
