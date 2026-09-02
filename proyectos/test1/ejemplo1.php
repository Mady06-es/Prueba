<?php

$nombre_alumno = "Bibi";
$edad_alumno = 6;


echo"Hola Mundo";
print "Hola Mundo";
echo "<br><hr>";
$arreglo = ["item1", "item2"];
echo "<br><hr>";
print_r($arreglo);//asi se debe mostrar el arreglo
echo "<br><hr>";
var_dump($arreglo);//otra manera
echo "<br><hr>";
var_dump($nombre_alumno);
//print f con salida de formato
echo "<br><hr>";
$precio_matricula = 58.4567789212334459;
echo "<br><hr>";
echo $precio_matricula;
echo "<br><hr>";
printf("Valor de matricula %.2f", $precio_matricula);
echo "<br><hr>";

echo "\" $$precio_matricula\"";

/*+echo <<<HTML 
 <p> texto </p> 
HTML;*/

?>

<h1><?= $nombre_alumno ?></h1>
<p><?= $edad_alumno?></p>