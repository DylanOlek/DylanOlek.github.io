<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 8</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <h1>Juego de loteria</h1>
        <form action="practica8.php" method="POST">
            <input type="submit" value="Dar Carta" name="carta" class="btn btn-primary">
            <div class="row">
                <div class="col-sm-6">
                    <?php
                        //Pintar Carta 1
                        for($i=0; $i<16; $i++){
                            $numero = rand(1,54);
                            echo "<div class='col-3' width='25%'><img src='fotos_loteria/".$numero.".jpeg' class='img-thumbnail'></div>";
                        }
                    ?>
                </div>
                <div class="col-6">

                </div>
            </div>
        </form>
    </div>
</body>
</html>