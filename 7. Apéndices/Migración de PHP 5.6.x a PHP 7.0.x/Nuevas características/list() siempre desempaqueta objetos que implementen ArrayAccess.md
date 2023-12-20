# list() siempre desempaqueta objetos que implementen ArrayAccess

Anteriormente, no se garantizaba que list() operase correctamente con
objetos que implementasen ArrayAccess. Esto ha sido arreglado.
