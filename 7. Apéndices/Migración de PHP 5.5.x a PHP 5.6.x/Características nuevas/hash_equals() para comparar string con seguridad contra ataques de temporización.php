<?php

$previsto   = crypt('12345', '$2a$07$usesomesillystringforsalt$');
$correcto   = crypt('12345', '$2a$07$usesomesillystringforsalt$');
$incorrecto = crypt('1234',  '$2a$07$usesomesillystringforsalt$');

var_dump(hash_equals($previsto, $correcto));   // bool(true)
var_dump(hash_equals($previsto, $incorrecto)); // bool(false)
