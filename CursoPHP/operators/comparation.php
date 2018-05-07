<?php

$v1 = 11;
$v2 = 12;

//$result = $v1 != $v2;
$result = $v1 <=> $v2;
var_dump($result);