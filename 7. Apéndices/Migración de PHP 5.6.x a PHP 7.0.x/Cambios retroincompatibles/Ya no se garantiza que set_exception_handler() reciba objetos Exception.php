<?php

// Código de la era de PHP 5 que no funcionará.
function handler(Exception $e) {
  $e;
}

set_exception_handler('handler');

// Compatible con PHP 5 y 7.
function handler2($e) {
  $e;
}

// Solo PHP 7.
function handler3(Throwable $e) {
  $e;
}
