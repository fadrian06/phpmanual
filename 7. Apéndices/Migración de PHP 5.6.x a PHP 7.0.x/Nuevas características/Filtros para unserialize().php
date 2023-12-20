<?php

// convertir todos los objetos a un objeto __PHP_Incomplete_Class
$data = unserialize($foo, ["allowed_classes" => false]);

// convertir todos los objetos a un objeto __PHP_Incomplete_Class excepto a los de MiClase y MiClase2
$data = unserialize($foo, ["allowed_classes" => ["MiClase", "MiClase2"]]);

// comportamiento predeterminado (lo mismo que omitir el segundo argumento) que acepta todas las clases
$data = unserialize($foo, ["allowed_classes" => true]);
