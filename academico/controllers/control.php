<?php

//IMPORTANDO MODELOS
include_once('./models/formulario.php');

//IMPORTANDO DATOS
include_once('./datos/formulario.php');


class Control
{

  public $MODEL;

  public function __construct()
  {
    $this->MODEL = new medicamento(); 
  }

  //VISTA POR DEFECTO
  public function index()
  {
    include_once('views/home.php');
  }


  public function actas()
  {
    include_once('views/vis/acta.php');
  }

  public function compromisos($acta_id)
  {
    include_once("views/vis/compromisos.php?acta_id={$acta_id}");
  }



  public function calendario()
  {
    include_once('views/medicamentos/calendario.php');
  }


  public function nuevo()
  {
    include_once('views/medicamentos/save.php');
  }



}
