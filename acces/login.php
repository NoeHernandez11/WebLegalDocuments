<?php
//este es
include 'config.php';
session_start();
//ocupa include ionc
// controlador
if($_POST){

    //$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "";
    //$password = (isset($_POST["password"])) ? $_POST['password'] : "";
    //$sentencia=$conexion->prepare("SELECT *, count(*) as n_usuario
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];

    $sentencia=$conexion->prepare("SELECT COUNT(*)
    FROM usuario
    WHERE nombre_usuario=:usuario
    AND password=:password
    ");
    
    $sentencia->bindParam(":usuario",$usuario);
    $sentencia->bindParam(":password",$password);
    $sentencia->execute();

    $registro=$sentencia->fetch(PDO::FETCH_LAZY);
    print_r($registro);
    if($registro['count']>0){
      $_SESSION['usuario']=$registro['usuario'];
      $_SESSION['logueado']=true;
      header("Location:personal.php");
   }else{
      $mensaje="Error: El usuario o contraseña son incorrectos!";
   }
}
    //if ($lista_usuarios['count'] > 0) {
      
    //$sentencia = $conexion->prepare("SELECT usuario.id as id, usuario.nombre_usuario as nombre
    //FROM usuario
    //WHERE nombre_usuario=:usuario
    //AND password=:password
    //");
      //asignacion de valores que vienen de post(formukario)
      //$sentencia->bindParam(":usuario", $usuario);
      //$sentencia->bindParam(":password", $password);
      //$sentencia->execute();
      
      //$lista_usuarios = $sentencia->fetch(PDO::FETCH_LAZY);
      

      //$_SESSION['usuario'] = $lista_usuarios['usuario'];
      //$_SESSION['idU'] = $lista_usuarios['id'];
      //$_SESSION['nomU'] = $lista_usuarios['nombre'];
      //$_SESSION['logueado'] = true;
      //$_SESSION['esEmpresa'] = $controlador->esEmpresa($_SESSION['idU']);
      //header("Location:personal.php");
    //} else {
      //$mensaje = "Error: El usuario o contraseña son incorrectos!";
    //}
  //}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Que bueno que estas de vuelta</h3>
      <input type="email" name="usuario" placeholder="Ingresa tu usuario" required class="box">
      <input type="password" name="password" placeholder="Ingresa tu Contraseña" required class="box">
      <input type="submit" name="submit" value="Ingresar" class="btn">
      <p>ya tienes una cuenta? <a href="register.php">Registrate ahora! </a></p>
   </form>

</div>

</body>
</html>