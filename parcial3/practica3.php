<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practcia 3</title>
</head>
<body>
    <h1>Usando PHP dentro de un HTML</h1>

    <?php

        $alumno = "Dylan Olek";
        $edad = 16;
        $escuela = "CETIS 107";
        $especialidad = "programacion";

    ?>

    <form action="">
        <label for=""Nombre de alumno></label>
        <input type="text" value=<?php echo $alumno; ?>>

        <label for="">Edad</label>
        <input type="number" value=<?php echo $edad; ?>>
        
        <input type="submit" value=<?php echo "'Inscribirse a ".$especialidad,"'"; ?>>
    </form>

    <br><br>

    <h2>Calificaciones</h2><br>
    Calculo diferencial: <?php echo rand(5,10); ?> <br>
    Fisica; <?php echo rand(5,10); ?> <br>
    Ecologia: <?php echo rand(5,10); ?> <br>
    Ingles: <?php echo rand(5,10); ?> <br>
    Programacion: <?php echo rand(5,10); ?> <br>
    
    Promedio: <?php echo rand(5,10); ?>
</body>
</html>