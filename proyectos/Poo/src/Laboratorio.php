<?php

require __DIR__.'/../vendor/autoload.php'

use App/Evaluacion;
use App/MostrarFecha;

class Laboratorio extends Evaluacion{

use MostrarFecha;
  public function __construct($nombreEvaluacion , $ponderacion, public $notalab){
    parent::__construct($nombreEvaluacion , $ponderacion);
  }

   public function calcularNota(){
        return $this->notalab;
    }
}
?>