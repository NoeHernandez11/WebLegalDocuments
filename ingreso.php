<?php

session_start();
$usuario= $_SESSION['nombre_usuario'];
echo "<h1> BIENVENIDO $usuario</h1>";

?>