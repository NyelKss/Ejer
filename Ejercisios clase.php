<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="color.css">
    <title>Lápices</title>
</head>
<body>
<?php
//Ejercisios


//Variables
$Nombre = 'Juancho';
$Edad = 20;
$Peso = 7.5;

//Imprime
echo "hola mundo";
echo "<BR>";
echo $Nombre;echo "<br>";
echo $Años;echo "<br>";
echo $Peso; "<br>";
echo "<br>";


//Realiza las operaciones bascias
$numero =8;
$numero2 =8;
$suma = $numero + $numero2;
echo "La suma de $numero + $numero2 = $suma <br>";
$suma = $numero - $numero2;
echo "La resta de $numero - $numero2 = $suma <br>";
$suma = $numero * $numero2;
echo "La multiplicacion de $numero * $numero2 = $suma <br>";
$suma = $numero / $numero2;
echo "La division de $numero / $numero2 = $suma <br>";

// circulo
define("PI", 3.14);
$radio = 8;
$pot = 2;
$area = PI * ($radio ** $pot);
echo "area es: $area <br>";
$area = PI * $radio * $radio;
echo "area es: $area <br>";
$area = PI * pow($radio,2);
echo "area es: $area <br>";


//Mayor de 2 numeros
$promedio = 8;
$califMin = 6;

if($promedio >= $califMin){
    echo"aprobo la materia";
}
else {
    echo "reporbo la materia";
}
echo "<br>";


//Dia de la semana 
echo "hoy es <br>";
$dia= date("D");
if($dia == "Mon")
echo "Lunes";
elseif($dia == "Tue")
echo"martes";
elseif($dia == "Wed")
echo "miercoles";
elseif($dia == "Thu")
echo "Jueves";
elseif($dia == "Fri")
echo "Viernes";
elseif($dia == "Sat")
echo "Sabado";
else
echo "domingo;"


?>
 <br> <br> <a href="Presentacion.html">Regresar al menu</a>
</body>
