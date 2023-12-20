# Antigua y nueva evaluación de expresiones indirectas

| Expresión             | Interpretación de PHP 5  | Interpretación de PHP 7 |
|-----------------------|--------------------------|-------------------------|
| `$$foo['bar']['baz']` | `${$foo['bar']['baz']}`  | `($$foo)['bar']['baz']` |
| `$foo->$bar['baz']`   | `$foo->{$bar['baz']}`    | `($foo->$bar)['baz']`   |
| `$foo->$bar['baz']()` | `$foo->{$bar['baz']}()`  | `($foo->$bar)['baz']()` |
| `Foo::$bar['baz']()`  | `Foo::{$bar['baz']}()`   | `(Foo::$bar)['baz']()`  |
