# Cambios en la severidad de avisos de E_STRICT

| Situación                                                     | Nuevo nivel/comportamiento          |
|---------------------------------------------------------------|-------------------------------------|
| Indexación mediante un recurso                                | E_NOTICE                            |
| Métodos estáticos abstractos                                  | Aviso eliminado, no genera un error |
| 'Redefinición' de un constructor                              | Aviso eliminado, no genera un error |
| Discordancia de la signatura durante la herencia              | E_WARNING                           |
| Misma propiedad (compatible) en dos rasgos empleados          | Aviso eliminado, no genera un error |
| Acceso a una propiedad estática de forma no estática          | E_NOTICE                            |
| Solamente las variables deberían ser asignadas por referencia | E_NOTICE                            |
| Solamente las variables deberían ser pasadas por referencia   | E_NOTICE                            |
| Llamada a métodos no estáticos de forma estática              | E_DEPRECATED                        |
