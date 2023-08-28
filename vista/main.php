<?php
require_once("../controlador/busqueda_controlador.php");
$controlador = new Busqueda_Controlador("","");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebLegalDocuments</title>
    <script src="https://kit.fontawesome.com/a9c2562c5e.js?ver=1.0" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../assets/css/estilos.css?ver=1.0">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <!--//<link rel="stylesheet" href="../css/header_footer.css">-->
    
    
</head>
<body>
    <?php include("./header.php");?>
    
   
     
   <main>
        <!--Portada-->

        <div class="container__portada div__offset">
            <div class="portada">
                <section class="text__portada">
                   
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum turpis, scelerisque vel consequat in</p>
                    
                </section>
                <section class="imagen_portada">
                    <img src="../images/about-img.jpg" alt="">

                </section>
            </div>
        </div>
        <div class="contenedor_barra">
            <form class="barreda_de_busqueda" action="../vista/busqueda_vista.php" method="post">
                
                
                    
                <!-- fin bandeja de opciones -->

                <div class="Documents">
                    <i class="fa-solid fa-location-dot iconos_busquedas"></i>
                    <input type="text" class="buscar_lugar" placeholder="Lr" name="lr" autocomplete="off">
                    <!-- bandeja de opciones -->
                    <div class="bandeja_opciones bandeja_lugar">
                    <?php
                    if($controlador->datosDocuments != null)
                    foreach($controlador->datosDocuments as $Documents) {
                        echo ('<button type="button" class="opciones_lugar">'.$Documents['nombre'].'</button>');
                    }
                    
                    ?>
                    </div>
                    <!-- fin bandeja de opciones -->
                    

                </div>

                <button class="boton" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>

            </form>  
            
        </div>
        <div class="acceso_plataforma">
               <div class="btns_acceso">
                 <a href="./busqueda.html" class="btn__accinicio">Inicia Sesión</a>
                 <a href="#" class="btn__accregistro">Registrate</a>
               </div>
                
                
        </div>

   </main>
  
   <?php include("./footer.php");?>
    <script src="../assets/js/script.js"></script>
</body>

</html>