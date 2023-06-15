<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .col-1.card{
            height: 90px;
        }
        .escalera{
            background-image: url('escalera.png');
        }
    </style>
</head>
<body>
    <?php
        $colores = ["#EB984E","#F6DDCC","#FDF2E9","#F6DDCC","#454545","#999999"];
    ?>
    <div class="container">
        <h1>Practica 7</h1>
        <form action="">
            <div class="row">
                <?php
                    for($i=100; $i>0; $i--){
                        if($i == 4){
                            echo "<div class='col-1 card m-1 casilla escalera' style='background-color:".$colores[rand(0,5)].";'>".$i."</div>";
                        }
                        echo "<div class='col-1 card' style='background-color:".$colores[rand(0,5)].";'>".$i."</div>";
                    }
                ?>
            </div>    
        </form>
            
    </div>
    
</body>
</html>