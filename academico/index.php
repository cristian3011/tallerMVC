<?php

include_once('controllers/control.php');

//OPCIONALES
include_once('config/Conexion.php');
include_once('models/formulario.php');


$controller = new Control();

if(!isset($_REQUEST['c'])){
   // echo 'tamos aca';
   require_once("views/home.php");
} else {                  
   $peticion = $_REQUEST['c'];
   if(isset($_REQUEST['acta_id'])){
      $acta_id = $_REQUEST['acta_id'];
      call_user_func(array($controller , $peticion, $acta_id));
   }else{
      call_user_func(array($controller , $peticion));
   }   
   
}

