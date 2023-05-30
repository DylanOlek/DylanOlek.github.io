<?php

    $Nombre = $_GET{"Nombre"};

    echo "Nombre: " .$Nombre ."<br><br>";

    $edad = $_GET{"Edad"};

    echo "Edad: " .$edad ."<br><br>";

    $escuela = $_GET{"Escuela"};

    echo "Escuela: " .$escuela ."<br><br>";

    $direccion = $_GET{"Direccion"};

    echo "Direccion: " .$direccion ."<br><br>";

    if($edad >=18){
        echo "Eres mayor de edad";
    }else{
        echo "Eres menor de edad";
    }

    if($escuela == "CETIS 107"){
        echo "<div style='background-color:blue;'>CETIS 107</div>";
    }else{}
    if($escuela == "CBTIS 224"){
        echo "<div style='background-color:red;'>CBTIS 224</div>";
    }else{}
    if($escuela == "COBAES"){
        echo "<div style='background-color:green;'>COBAES</div>";
    }else{}
    
?>