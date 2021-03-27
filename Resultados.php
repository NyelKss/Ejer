<fieldset>
    <legend>Resultados</legend>
<?php
$lapices = $_GET['lapices'];
    echo "Los lapices a comprar son:  $lapices" ; 
    if($lapices>= 1000)
        $total = $lapices * 85;
    else
        $total = $lapices * 90;
        echo "<BR> El precio es de $total  "
?>
<BR><BR>
</fieldset>
<br><a href = "Lapices.html">Ingresar datos nuevos</a>
<br><a href=" Presentacion.html">Regresar al menu</a>