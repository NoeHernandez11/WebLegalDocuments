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

        <h3>Tag</h3>

        <input type="text" name="puesto" placeholder="puesto" required class="box">

        <label for="start">Fecha inicio</label>

        <input type="date" name="Fecha_inicio" id="start" value="2023-05-18" min="1990-01-18" max="2023-05-18">

        <label for="end">Fecha Fin</label>

        <input type="date" name="Fecha_inicio" id="end" value="2023-05-18" min="1990-01-18" max="2093-05-18">

        <input type="text" name="Descripcion" placeholder="Breve reseña (Opcional)" required class="box">

        <ul>

        <li><input type="submit" name="submit" value="AGREGAR OTRA" class="btn"></li>

        <BR></BR>

        <li><input type="submit" name="submit" value="ADJUNTAR" class="btn"></li>

        </ul>
        
        <BR></BR>

        <fieldset>

        <legend>Marca </legend>

        <div>
        <input type="checkbox" name="xp" id="xp" checked> 
        <label for="Experienciant">No existe tag </label>
        </div>
        </fieldset>

        <BR></BR>
        
        <input type="submit" name="submit" value="GUARDAR" class="btn">

    </form>
</div>
    
</body>