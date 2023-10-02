<?php

include("config.php");

if(isset($_POST['submit'])){

   //$name = ($conexion, $_POST['nombre_usuario']);
   //$email = ($conexion, $_POST['correo']);
   //$pass = ($conexion, md5($_POST['pass']));
   //$cpass = ($conexion, md5($_POST['cpassw']));
   $name=(isset($_POST["usuario"])?$_POST["usuario"]:"");
   $email=(isset($_POST["correo"])?$_POST["correo"]:"");
   $pass=(isset($_POST["password"])?$_POST["password"]:"");
   $cpass=(isset($_POST["cpassword"])?$_POST["cpassword"]:"");

  
   //$select_users= pg_query($conexion, "SELECT * FROM usuario 
   //WHERE correo = '$name' AND password = '$pass'");


   $sentencia=$conexion->prepare("SELECT COUNT(*)
      FROM usuario
      WHERE nombre_usuario=:usuario 
      AND password=:password");


$sentencia->bindParam(":usuario",$name);
$sentencia->bindParam(":password",$pass);
$sentencia->execute();

   $lista_usuarios=$sentencia->fetch(PDO::FETCH_LAZY);
            
   if($lista_usuarios['count']>0){
      $message[] = "este usuario ya existe!";
   }else{
      if($pass != $cpass){
         $message[] = "confirmacion de contraseña no es la misma!";
      }else{
         //pg_query($conexion, "INSERT INTO usuario(nombre_usuario, password, correo) 
         //VALUES('$name', '$cpass', '$email'");
         $sentencia=$conexion->prepare("INSERT INTO usuario(id,nombre_usuario,password,id_estado_usuario,correo)
            VALUES (default, :nombre_usuario,:password,1,:correo)");

         $sentencia->bindParam(":nombre_usuario",$usuario);
         $sentencia->bindParam(":password",$password);
         //fecha de creacio
         $sentencia->bindParam(":correo",$email);
         $sentencia->execute();
         $message[] = "registro exitosó";
         header("Location:/WeblegalDocuments/acces/login.php");
      }
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

   
    <link rel="stylesheet" href="../../assets/css/header_footer.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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


<main>

  <br/>

  <div class="container">
    <div class="row">
        <div class="col-4">
            
        </div>
        <div class="col-4">
            <br/>
            <br/>
        <div class="card">
                <div class="card-header">
                    Regristro de cuenta
                </div>
                <div class="card-body">
        <form action="" method="post">

        <div class="mb-3">
          <label for="usuario" class="form-label">Nombre del usuario:</label>
          <input type="text"
            class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Ingrese un nombre de usuario">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">correo</label>
          <input type="email"
            class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Ingrese su email">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password"
            class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Ingrese su contraseña">
        </div>

        <div class="mb-3">
          <label for="cpassword" class="form-label">confirmacion contraseña</label>
          <input type="password"
            class="form-control" name="cpassword" id="cpassword" aria-describedby="helpId" placeholder="Confirme su contraseña">
        </div>


        <input type="submit" name="submit" value="registrarse" class="btn-primary">


        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Home</a>

        <P> ya tienes una cuenta? <a href="/PuroEmpleo/acces/login.php"> Inicia Sesion! </a></P>
        
        </form>
        </div>
                <div class="card-footer text-muted">

                </div>
            </div>
        </div>
        
    </div>
  </div>
    
</div>
  </main>

  <footer>

</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>


</body>
</html>
