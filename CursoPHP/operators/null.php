<?php
//Es un nuevo operador que se integro apartir de PHP 7
//Si el valor de una variable es null en el navegador aparecerá como ‘default’.

$a = null;
//$a = 'value x';
$result = $a ?? 'default';
var_dump($result);
?>