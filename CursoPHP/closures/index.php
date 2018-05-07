<?php

//$var2 = 1;

//insertar la variable var2 en la funcion
/*
$var = function () use ($var2){
	echo 'This is a closure<br>';
	echo 'Value ' . $var2;
};*/
//------------------------------------
$x = 3;
$numbers = [1, 2, 3, 4, 5];
$closure = function ($n) use ($x) {
	return $n * $x;
};

$x = 4;
/*$result = array_map(function ($n) use ($x) {
	return $n * $x;
}, $numbers);*/
$result = array_map($closure, $numbers);
var_dump($result);
?>