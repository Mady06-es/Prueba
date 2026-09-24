<?php


namespace App;



trait MostrarFecha{
  public function mostrarFecha(){
    echo date ("Y-m-d", null);
  }
}

// es como un contrato (interface) obliga a la clase a deba implementar el metodo,
// ademas no se le puede agregar metodos como en abstract, interface no lo permite


class Evaluacion extends EvaluacionAbs implements EvaluacionI{
    public function __construct(public $nombreEvaluacion , public $ponderacion)
    {   
    }
    public function calcularNota(){
        return "no implementado;";
    }
  public function aporteNota(){
        return $this->calcularNota() * $this->ponderacion;
    }
}

class Parcial extends Evaluacion{

  public function __construct($nombreEvaluacion , $ponderacion, public array $notas){
    parent::__construct($nombreEvaluacion , $ponderacion);
  }

   public function calcularNota(){
        return array_sum($this->notas)/count($this->notas);
    }

}



class Proyecto extends Evaluacion
{
  // Recibe el array en el constructor
  public function __construct($nombreEvaluacion, $ponderacion, public array $notaPoryecto){
    parent::__construct($nombreEvaluacion, $ponderacion);
  }

  public function calcularNota(){
    return ($this->notaPoryecto['notaDefensa'] + $this->notaPoryecto['notaProyecto']) / 2;
    
  }
}

class Alumno {
  public static $nombreAlumno;
  public function __construct( public $carnet)
  {

  }

  public static function mostarMensaje($nombre){
   self ::$nombreAlumno=$nombre;
   return self::$nombreAlumno;
   
  }
}

$parcial = new Parcial("Parcial 1", 0.25, [6,7,9]);
echo $parcial->calcularNota() . "\n";
echo "<br>";
$laboratorio = new Laboratorio("Laboratorio 1", 0.15, 7);
echo $laboratorio->calcularNota() . "\n";
echo "<br>";
$proyecto = new Proyecto("Proyecto 1", 0.60, [
    'nombrePoyecto' => 'Sistema PHP',
    'notaDefensa' => 8,
    'notaProyecto' => 10
]);
echo $proyecto->calcularNota();
echo '<br>';
echo $laboratorio->aporteNota();
echo '<br>';
echo $parcial->aporteNota();
echo '<br>';
echo $proyecto->aporteNota();
echo '<br>';
$laboratorio->mostrarFecha(); 
echo '<br>';
echo Alumno::mostarMensaje("Vilma");
?>