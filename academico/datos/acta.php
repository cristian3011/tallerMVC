<?php

class FormularioClass
{
    private $id;
    private $fecha;
    // private $asunto;
    private $descripcion;
    private $responsable;
    private $programa_id;

    

    public function __construct()
    {
        $this->id="";
        $this->fecha="";
        $this->asunto="";
        $this->descripcion="";
        $this->responsable="";
        $this->programa_id="";

    }

    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id = $id;
    }

    // function getAsunto(){
    //     return $this->asunto;
    // }
    function setAsunto($asunto){
        $this->asunto = $asunto;
    }

   
    
}
