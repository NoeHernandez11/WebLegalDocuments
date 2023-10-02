<?php

$servidor="localhost";
$BaseDatos="legal_docs";
$usuario="root";
$password="root";

try{
    $conexion=new PDO("mysql:host=$servidor;dbname=$BaseDatos",$usuario,$password);
}catch (Exception $ex){
    echo $ex->getMessage();
}

?>