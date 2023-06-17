<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .casilla {
            height: 80px;
            font-weight: bold;
        }
        .escalera{
            background-image: url('escalera.png');
            background-size: cover;
            background-position: center;
        }
        .serpiente{
            background-image: url('serpiente.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
        .ficha{
            background-image: url('ficha.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Practica 7</h1>
        <form action="practica7.php" method="POST">
        <center>
        <input type="submit" value="Jugar" class="btn btn-primary">
        </center>
            <div class="row">
                <?php
                    $colores = ["#EB984E","#F6DDCC","#FDF2E9","#F6DDCC","#454545","#999999"];
                        if(isset($_POST["casilla"])){
                            $dado = rand(1,12);
                            echo "<h2> Resultado del dado =".$dado."</h2>";
                            $casilla = $dado + intval($_POST["casilla"]);
                                echo "<h3>El jugador estaba en la casilla ".intval($_POST["casilla"])." y pasó a la casilla ".$casilla.".</h3>";
        
                                if($casilla >=100){
                                    echo "<h1>El jugador gano</h1>";
                                    $casilla = 100;
                                }
                                //validacion de casilla 4
                                if($casilla == 4){
                                    $casilla = 15;
                                    echo "<h3>El jugador cayó en una <img src='escalera.png' width='50px'> y subió a la casilla 15</h3>"; 
                            }
                        }else{
                            $casilla = 0;
                        }
                        for($i=100; $i>0; $i--){
                            if($casilla == $i){
                                echo "<div class='col-1 card m-1 casilla ficha' style='background-color:'".$colores[rand(0,4)].";'>".$i."</div>";
                            } else if($i == 4 || $i == 9 || $i == 33 || $i == 28 || $i == 40 || $i == 80 ||$i == 71 ||$i == 77){
                                echo "<div class='col-1 card m-1 casilla escalera' style='background-color:".$colores[rand(0,4)].";'>".$i."</div>";
                            } else if($i == 17 || $i == 54 || $i == 58 || $i == 64 || $i == 87 || $i == 93 ||$i == 95 ||$i == 99 ||$i == 36){
                                echo "<div class='col-1 card m-1 casilla serpiente' style='background-color:".$colores[rand(0,4)].";'>".$i."</div>";
                            } else {
                                echo "<div class='col-1 card m-1 casilla' style='background-color:".$colores[rand(0,4)].";'>".$i."</div>";
                            }
                        
                        
                        }
                ?>
            </div>   
            <input type="hidden" name="casilla" value="<?php echo $casilla; ?>">
        </form>
            
    </div>
    
</body>
</html>