<?php
//require_once("../controlador/busqueda_controlador.php");
//$controlador = new Busqueda_Controlador("","");
//reactivar

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PuroEmpleo</title>
    <script src="https://kit.fontawesome.com/a9c2562c5e.js?ver=1.0" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../assets/css/estilos.css?ver=1.0">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/header_footer.css">
    
    
</head>
<body>
    <?php include("./header.php");
    // print_r("idU: ".$_SESSION['idU']);
    // print_r("/nomU: ".$_SESSION['nomU']);
    // print_r("/logueado: ".$_SESSION['logueado']);
    // print_r("/esfabrica: ".$_SESSION['esfabrica']);
    ?>
    
   
     
   <main>
        <!--Portada-->


        <div class="container__portada div__offset">
            <div class="portada">
                <section class="text__portada">
                   
                    <p>Archivos en la Web para propositos legales</p>
                    
                </section>
                <section class="imagen_portada">
                    <img src="../assets/img/portada/portada.png" alt="">
                    <!--lo de arriba ocupa cambios -->

                </section>
            </div>
        </div>
        <div class="contenedor_barra">
            <form class="barreda_de_busqueda" action="../vista/busqueda_vista.php" method="post">
                
               
                <!-- navegacion por opciones dentro de la web -->

                <button class="boton" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>

            </form>  
            
        </div>
        <div class="acceso_plataforma">
               <div class="btns_acceso">
                 <a href="../acces/login.php" class="btn__accinicio">Inicia Sesión</a>
                 <a href="../register.php" class="btn__accregistro">Registrate</a>
               </div>
                
                
        </div>

   </main>
  
   <?php include("./footer.php");?>
    <script src="../assets/js/script.js"></script>
</body>

</html>