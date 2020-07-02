<?php

$a=$_GET['a'];
$d=$_GET['d'];
$r=$d/2;

define('PI', 3.1416);
$circulo= round((PI*(pow($r,2))),2)/2;

$triangulo= ($d*$a)/2;


echo "El área de la figura es: ".($a=$triangulo+$circulo);

?>