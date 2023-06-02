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

echo "<h3>Pregunta 1: ".$pregunta1."</h3>";

if($pregunta1 == "b"){
    $calificacion ++;
    echo "<img src:'bien.png' width='3%'>";
}else{
   echo "La respuesta es b";
   echo "<img src:'mal.png'>";
}
if($pregunta2 == "a"){
    $calificacion ++;
    echo "<img src:'bien.png'>";
}else{
    echo "La respuesta es a";
    echo "<img src:'mal.png'>";
}
if($pregunta3 == "c"){
    $calificacion ++;
    echo "<img src:'bien.png'>";
}else{
    echo "La respuesta es c";
    echo "<img src:'mal.png'>";
}
if($pregunta4 == "c"){
    $calificacion ++;
    echo "<img src:'bien.png'>";
}else{
    echo "La respuesta es c";
    echo "<img src:'mal.png'>";
}
if($pregunta5 == "a"){
    $calificacion ++;
    echo "<img src:'bien.png'>";
}else{
    echo "La respuesta es a";
    echo "<img src:'mal.png'>";
}
if($pregunta6 == "c"){
    $calificacion ++;
    echo "<img src:'bien.png'>";
}else{
    echo "La respuesta es c";
    echo "<img src:'mal.png'>";
}
if($pregunta7 == "c"){
    $calificacion ++;
    echo "<img src:'bien.png'>";
}else{
    echo "La respuesta es c";
    echo "<img src:'mal.png'>";
}
if($pregunta8 == "b"){
    $calificacion ++;
    echo "<img src:'bien.png'>";
}else{
    echo "La respuesta es b";
    echo "<img src:'mal.png'>";
}
if($pregunta9 == "a"){
    $calificacion ++;
    echo "<img src:'bien.png'>";
}else{
    echo "La respuesta es a";
    echo "<img src:'mal.png'>";
}

?>