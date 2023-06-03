<?php

$nombre =$_POST["nombre"];

$calificacion = 0;

$pregunta1 =$_POST["pregunta1"];
$pregunta2 =$_POST["pregunta2"];
$pregunta3 =$_POST["pregunta3"];
$pregunta4 =$_POST["pregunta4"];
$pregunta5 =$_POST["pregunta5"];
$pregunta6 =$_POST["pregunta6"];
$pregunta7 =$_POST["pregunta7"];
$pregunta8 =$_POST["pregunta8"];
$pregunta9 =$_POST["pregunta9"];

if($pregunta1 == "b"){
    $calificacion = $calificacion + 1.1;
    echo "Correcto <img src ='bien.png' width='3%'><hr>";
}else{
   echo "La respuesta es b";
   echo " <img src ='mal.png' width='3%'>";
}
if($pregunta2 == "a"){
    $calificacion = $calificacion + 1.1;
    echo "Correcto <img src ='bien.png' width='3%'><hr>";
}else{
    echo "La respuesta es a";
    echo " <img src ='mal.png' width='3%'>";
}
if($pregunta3 == "c"){
    $calificacion = $calificacion + 1.1;
    echo "Correcto <img src ='bien.png' width='3%'><hr>";
}else{
    echo "La respuesta es c";
    echo " <img src ='mal.png' width='3%'>";
}
if($pregunta4 == "c"){
    $calificacion = $calificacion + 1.1;
    echo "Correcto <img src ='bien.png' width='3%'><hr>";
}else{
    echo "La respuesta es c";
    echo " <img src ='mal.png' width='3%'>";
}
if($pregunta5 == "a"){
    $calificacion = $calificacion + 1.1;
    echo "Correcto <img src ='bien.png' width='3%'><hr>";
}else{
    echo "La respuesta es a";
    echo " <img src ='mal.png' width='3%'>";
}
if($pregunta6 == "c"){
    $calificacion = $calificacion + 1.1;
    echo "Correcto <img src ='bien.png' width='3%'><hr>";
}else{
    echo "La respuesta es c";
    echo " <img src ='mal.png' width='3%'>";
}
if($pregunta7 == "c"){
    $calificacion = $calificacion +1.1;
    echo "Correcto <img src='bien.png' width='3%'><hr>";
}else{
    echo "La respuesta es c";
    echo "<img src ='mal.png' width='3%'>";
}
if($pregunta8 == "b"){
    $calificacion = $calificacion + 1.1;
    echo "Correcto <img src ='bien.png' width='3%'><hr>";
}else{
    echo "La respuesta es b";
    echo "<img src ='mal.png' width='3%'>";
}
if($pregunta9 == "a"){
    $calificacion = $calificacion+ 1.1;
    echo "Correcto <img src ='bien.png' width='3%'><hr>";
}else{
    echo "La respuesta es a";
    echo "<img src ='mal.png' width='3%'>";
}
echo $calificacion;

?>