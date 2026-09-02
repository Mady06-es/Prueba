<?php
session_start();    

$_SESSION["registro"]  ??= [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
echo "Datos Post ";

$nombreEstudiante = $_POST["nombre_estudiante"];
$notas = $_POST["notas"];


$_SESSION['registro'][] = [
    "nombre"=>$_POST["nombre_estudiante"],
    "carnet"=>$_POST["carnet_estudiante"],
    "notas"=>$_POST["notas"],

];

echo $nombreEstudiante;
var_dump($_SESSION["registro"]);
var_dump($notas);

}
else {
    echo "Datos por get ";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <label for="">Nombre</label>
            <input type="text" name="nombre_estudiante">
            <label for="">Carnet</label>
            <input type="text" name="carnet_estudiante">
            <label for="">Nota</label>
            <input type="text" name="notas[]">
            <label for="">Nota 2</label>
            <input type="text" name="notas[]">
            <label for="">Nota 3</label>
            <input type="text" name="notas[]">
            <input type="submit">
        </form>
    </div>
</body>
</html>