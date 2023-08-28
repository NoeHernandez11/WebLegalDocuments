<?php
session_start();
if(!empty($_POST["btningresar"])){
    if(!empty($_POST[""]))  !empty($_POST["pass"]){
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        $sql=$conexion->$query("SELECT * FROM usuario WHERE nombre_usuario='$usuario' AND password='$password'");
        if ($datos=$sql->fetch_oject()) {
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombre"]=$datos->nombre;
            header("location: index.php")
        } else {
            echo"<div> Acceso denegado<div>";
        }
        
    }else{
        echo "Rellene los campos";
        
    }
 }
?>