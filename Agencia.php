<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="color.css">
    <title>Agencia de viajes</title>
</head>
<body>
    <p>Bienvenido a:</p>
    <h1 align="center">Agencia de viajes</h1>
    <h2 align="center">El Tucan Feliz</h2>
    <div align="center"><img src="tucanioc.jpg"></div>    

    
        
    <img src="autobuses.png" width="200" height="250">
    <fieldset>
    <?php
    $alumnos=rand(1,200);
    echo "El numero de alumnos es:   $alumnos <br>";
    if($alumnos>=100)
      $importe=$alumnos*65;
    elseif($alumnos>=50 && $alumnos<=99)  
      $importe=$alumnos*70;
    elseif($alumnos>=30 && $alumnos<=49) 
      $importe=$alumnos*95;
    else{
    $costo=4000/$alumnos;
    $importe=4000;
    echo $costo;
    }
    echo "El importe sera: " ; echo $importe;
    ?>
    </fieldset>
    <a href="Presentacion.html"> Regresar al menu </a>
</body>
</html>