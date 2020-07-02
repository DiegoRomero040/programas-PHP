<?php

extract($_POST);
$matricula= $_POST['matricula'];
$semestre= $_POST['semestre'];
$promedio= $_POST['promedio'];

if($semestre >=6 and $promedio >=8.8 ){
    echo "<br>Has sido aceptado en: Economia <br> Tu matricula es: ".$matricula."<br>";
}
if($semestre >6 and $promedio >8.5 ){
    echo "<br><br>Has sido aceptado en: Computacion <br> Tu matricula es: ".$matricula."<br> ";
}
if($semestre >5 and $promedio >8.5 ){
    echo "<br><br>Has sido aceptado en: Administracion  <br> Tu matricula es: ".$matricula."<br>";
}
if($semestre >5 and $promedio >8.5 ){
    echo "<br><br>Has sido aceptado en: Contabilidad  <br> Tu matricula es: ".$matricula."<br>";
}
else{
    echo "No has sido aceptado: ".$promedio;
}
return;

?>