<?php
session_start();
$url_base="http://localhost/WebLegalDocuments";



//if(!isset($_SESSION['usuario'])){
//    header("Location:".$url_base."login.php"); <li><a href="/login.php" class="btn__inicio">Inicia Sesión</a></li>
//}
?>
<!--Creacción de header y Menú-->
<head>
    <link rel="stylesheet" href="../assets/css/header_footer.css">
</head>
<header>
    <div class="container__header">
        <div class="logo">
            <!--rehacer el loogo -->
            <a href="./principal.php">
              <img src="../assets/img/heading-bg.png" alt="">
              <!--png de arriba eliminado-->
            </a>
        </div>

        <div class="menu">
            <i class="fa-solid fa-bars" id="btn_menu"></i>
            <div id="back_menu"></div>

            <nav id="nav">
                <img src="../assets/img/logo/Weblegal.png" alt="">
                <!--recrear logo de arriba-->

                <ul> 
                    
                    <li><a href="./Infoweblegal.php">Quienes somos</a></li>
                    <li><a href="./contactanos.php">Contactanos</a></li>
                    

                    <?php
                    if($_SESSION['logueado']) {
                        if($_SESSION['esEmpresa']) {
                            echo '<li><a href="./crear_editar_perfil.php" class="btn__registro">'.$_SESSION['nomU'].'</a></li>';
                        }
                        else {
                            echo '<li><a href="./perfil_trabajador.php" class="btn__registro">'.$_SESSION['nomU'].'</a></li>';
                        }
                        echo '<li><a class="nav-item nav-link" href="'.$url_base.'/index.php">Cerrar Sesion</a></li>';
                    }
                    else {
                        echo '<li><a href="'.$url_base.'/acces/login.php" class="btn__inicio">Inicia Sesión</a></li>
                        <li><a href="'.$url_base.'/register.php" class="btn__registro">Registrate</a></li>';
                    }
                    ?>
                    <!--recrear logo de arriba<li><a href=/acces/login.php" class="btn__inicio">Inicia Sesión</a></li>-->
                     <!--<li><a href="<>/register.php" class="btn__registro">Registrate</a></li>
                    <li><a class="nav-item nav-link" href=">/acces/login.php">Cerrar Sesion</a></li>-->

                    
                </ul>
            </nav>
            
           
            
        </div>
    </div>

   

 </header>