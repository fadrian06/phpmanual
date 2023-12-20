<?php

ini_set('assert.exception', 1);

class ErrorPersonalizado extends AssertionError {
}

assert(false, new ErrorPersonalizado('Un mensaje de error'));

/*
El resultado del ejemplo sería:
-------------------------------
Fatal error: Uncaught ErrorPersonalizado: Un mensaje de error
 */
