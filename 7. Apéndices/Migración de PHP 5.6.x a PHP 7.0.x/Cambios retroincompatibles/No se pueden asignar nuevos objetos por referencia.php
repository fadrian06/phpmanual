<?php

class C {}
$c = &new C;

/*
Salida del ejemplo anterior en PHP 5:
-------------------------------------
Deprecated: Assigning the return value of new by reference is deprecated ...

Salida del ejemplo anterior en PHP 7:
-------------------------------------
Parse error: syntax error, unexpected 'new' (T_NEW) ...
 */
