<?php
require_once("../controlador/busqueda_controlador.php");

if($_POST) {
    $pos = strpos($_POST['lugar'],"-");
    if ($pos != false) {
        $lugart = substr($_POST['lugar'], 0, $pos - 1);
        $controlador = new Busqueda_Controlador($_POST['po'],$lugart);
    }
    else {
        $controlador = new Busqueda_Controlador($_POST['po'],$_POST['lugar']);
    }
}
else
$controlador = new Busqueda_Controlador("","");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PuroEmpleo</title>
    <link rel="stylesheet" href="../assets/css/busqueda.css">
    <link rel="stylesheet" href="../assets/css/busqueda-telefono.css" media="(max-width: 1024px)">
    
    <script src="https://kit.fontawesome.com/a9c2562c5e.js?ver=1.0" crossorigin="anonymous"></script>



</head>
<body>
    <?php include("../vista/header.php");?>

    <div class="contenedor_barra">
        <form class="barreda_de_busqueda" action="../vista/busqueda_vista.php" method="post">
            
            

            <button class="boton" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>  
        
    </div>
    <main>


        <div class="contenedor">
            
            if(count($controlador->datosOferta) == 0)
            echo('<div class="sin-resultados"><p>No hay ofertas disponibles</p></div>');
            ?>
            
        </div>

        
        <div class="contenedor-descripcion">
            
        </div>
        <div class="contenedor-info">
            <div class="circulog"></div>
            <div class="cuadrado">
                <div class="texto">
                    <p>Mauris eu elit in mauris lobortis pretium. Duis faucibus, nulla at tristique sodales, diam diam lobortis sapien, nec lacinia massa lorem quis arcu. Nulla condimentum justo sed quam finibus, eu efficitur diam porta. Fusce et lectus eu dolor tristique vehicula. Ut turpis quam, fermentum ut pretium at, feugiat eu lacus..</p>
                </div>

            </div>
            <div class="circulop"></div>

        </div>

    </main>
    <?php include("../vista/footer.php");?>
    <script src="../assets/js/busqueda.js"></script>
</body>
</html>