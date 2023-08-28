<?php
include ("config.php");
session_start();

if($_POST){
   $usuario=(isset($_POST["usuario"])?$_POST["usuario"]:"");
   $password=(isset($_POST["password"])?$_POST["password"]:"");

//$query="SELECT * FROM usuario WHERE nombre_usuario='$usuario' AND password='$clave'";
//seleccionar registros
$sentencia=$conexion->prepare("SELECT *, count(*) as n_usuario 
         FROM usuario
         WHERE nombre_usuario=:usuario
         AND password=:password
         ");
   //asignacion de valores que vienen de post(formukario)
  $sentencia->bindParam(":nombre_usuario",$usuario);
  $sentencia->bindParam(":password",$password);
  $sentencia->execute();

  $lista_usuarios=$sentencia->fetch(PDO::FETCH_LAZY);
  //$cantidad=['n_usuario'];

if($lista_usuarios['n_usuario']>0){
   
   $_SESSION['usuario']=$lista_usuarios['usuario'];
   $_SESSION['logueado']=true;
   header("Location:ingreso.php");
}else{
   $mensaje="Error: El usuario o contraseña son incorrectos!";
}

}
?>