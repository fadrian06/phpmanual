# preg_replace_callback_array()

Con la nueva función preg_replace_callback_array(), el código escrito es
más claro al emplear la función preg_replace_callback(). Antes de PHP 7,
las retrollamadas que necesitaban ser ejecutadas por cada expresión regular
requerían que la función de retrollamda fuera contaminada con muchas
ramificaciones.

Ahora, las retrollamadas se pueden registrar para cada expresión regular
usando un array asociativo, donde la clave es una expresión regular y el
valor es una retrollamada.
