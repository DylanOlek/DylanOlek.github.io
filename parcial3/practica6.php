<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <?php
    
        $jugador = $_POST["jugador"];
        $palabra = $_POST["palabra"];
        $vidas = $_POST["vidas"];
    ?>
    <div class="container">
        <div class="row">
            <h1>Juego del Ahorcado</h1>
            <h3>Nombre del jugador: <?php echo $jugador; ?></h3>
            <h3>Numero de vidas: <?php echo $vidas; ?></h3>
        </div>
        <?php
                $letras = str_split($palabra); //[0] = 'H', [1] = 'O', [2] = 'L', [3] = 'A';
                for($i=0; $i<(count($letras)); $i++){
                    echo "<input type='text' name='frase[]' style='width=5%;'>";
                }
            ?>
        <div class="row mt-4">
        <input type="text" name="letra" style='width= 10%;'>
            <input type="submit" value="Enviar letra" class="btn btn-primary" style='width=10%;'>
        </div>
    </div>
</body>
</html>