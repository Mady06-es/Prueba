</*?php


if ($_SERVER["RESQUEST_METHOD"] === "POST") {
echo "Datos Post ";

$NombreEstudiante = $_POST["nombre_estudiante"];
$notas = $_POST["notas"];
echo $NombreEstudiante;
var_dump($notas);

}
else {
    echo "Datos por get ";
}
?>*/
