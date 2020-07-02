<?php

$l=$_GET['l'];
$a=$_GET['a'];

$trian= (($l/2)*$a)/2;
$rec= (($l/2)*$a);

$valor= $trian+$rec;
echo "El área calculada del terreno es: ".$valor." Cm2";
?>