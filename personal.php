<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link rel="stylesheet" href="stylesN.css">

<body>

<div class="form-container">

    <form action="" method="post">

        <h3>personal</h3>

        <input type="text" name="name" placeholder="Ingrese su nombre" required class="box">

        <input type="fist" name="primer_nombre" placeholder="Ingrese su primer apellido" required class="box">

        <input type="contraseæa" name="segundo_nombre" placeholder="Ingrese su segundo apellido" required class="box">

        <input type="contraseæa" name="cedula" placeholder="Ingrese su cedula de identidad" required class="box">

        <input type="contraseæa" name="edad" placeholder="Ingrese su edad" required class="box">

        <select name="user_type">

        <option value="hombre">user</option>

        <option value="mujer">admin</option>

        </select>

        <BR></BR>
        <input type="submit" name="submit" value="GUARDAR" class="btn">

        <P> ya tienes una cuenta? <a href="login.php"> registrate ahora! </a></P>
    </form>
</div>
    
</body>
</html>
