```php
// Código anterior a PHP 7
use un\espacioDeNombres\ClaseA;
use un\espacioDeNombres\ClaseB;
use un\espacioDeNombres\ClaseC as C;

use function un\espacioDeNombres\fn_a;
use function un\espacioDeNombres\fn_b;
use function un\espacioDeNombres\fn_c;

use const un\espacioDeNombres\ConstA;
use const un\espacioDeNombres\ConstB;
use const un\espacioDeNombres\ConstC;

// código de PHP 7+
use un\espacioDeNombres\{ClaseA, ClaseB, ClaseC as C};
use function un\espacioDeNombres\{fn_a, fn_b, fn_c};
use const un\espacioDeNombres\{ConstA, ConstB, ConstC};
```
