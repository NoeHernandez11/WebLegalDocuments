<?php
$server= "localhost";
$database= "legal_docs";
$user= "root";
$password= "root";

$conexion = mysqli_connect($server, $user, $password, $database);
if(!$conexion) {
    die("Algun error");
}
echo("Conectado");



?>