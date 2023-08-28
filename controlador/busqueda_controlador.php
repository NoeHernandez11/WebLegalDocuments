<?php
require_once("../modelo/Documents.php");


class Busqueda_Controlador {

    
    public $datosDocuments;

    
    public function __construct($Documentso, $lugar)
    {
        

        $puesto = new DocumentsModelo();
        $this->datosDocuments = $Documents->buscarDocuments();
    }

}



?>