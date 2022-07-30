<?php

//IMPORTAMOS LA CONEXION
include_once('./config/Conexion.php');

//OPCIONAL YA QUE TU CONTROLLADOR TIENE A LOS DATOS
include_once('./datos/formulario.php');

class medicamento
{

  public $PDO;

  public function __construct()
  {
    try {  //inializamos la clase conexion
      $this->PDO = new Conexion();
    } catch (\Throwable $th) {
      throw $th;
    }
  }


  public function listarActas()
  {
    try {
      $query = "SELECT * FROM acta";
      $stm   = $this->PDO->ConectarBD()->prepare($query);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function listarCompromisos($acta_id)
  {
    try {
      $query = "SELECT * FROM compromiso where acta_id = '{$acta_id}'";
      $stm   = $this->PDO->ConectarBD()->prepare($query);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (\Throwable $th) {
      throw $th;
    }
  }



  public function success($message ="") {
    $resultado = '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Message!</strong> '.$message.'
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    ';
    echo $resultado;
  }

  public function error($message='') {
    $resultado = '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Message!</strong> '.$message.'
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    ';
    echo $resultado;
  }
}
