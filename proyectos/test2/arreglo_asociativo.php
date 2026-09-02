<?php

$listaAlumnos = [
    "TPI" => [
        ["Nombre" => "Dayna", "Carnet" => "MS21017"], 
        ["Nombre" => "Jairo", "Carnet" => "AA23027"]], 
     "SO" => [
         ["Nombre" => "Vilma 1", "Carnet" => "GJ20005"], 
        ["Nombre" => "Vilma 2", "Carnet" => "BR21039"]],
];
?>

<h1>Listado de estudiantes por materia</h1>

<?php 

foreach ($listaAlumnos as $clave => $itemList ) {
    echo "<h2> $clave</h2>";
    foreach($itemList as $valotItem){
        ?>

        <p><?= $valotItem["Nombre"] ?></p>
        <p><?= $valotItem["Carnet"] ?></p>
        <?php
    }


}

?>