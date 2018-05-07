<?php

//declaracion de la funcion
/*function hello($name){
	echo 'Hello ' . $name;
	echo '<br>';
}

hello('Genessis');
hello('Wilkel');*/

$x = 100;

function sum($a, $b){
	$x = $a + $b;
	return $x;
}

$c = sum(1,2);
var_dump($c);
var_dump($x);
?>