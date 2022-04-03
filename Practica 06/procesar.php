<?php
 $aBinario = $_POST["decimal"];
 $aDecimal = $_POST["binario"];
 $verfecha = $_POST["trip-start"];
 $Oracion = $_POST["cadena"];
    


echo "<h1>Resultados</h1><h3>De decimal a binario</h3>
   Número a convertir: $aBinario<br>"."En binario: " .decbin($aBinario);
echo "<hr><h3>De binario a decimal</h3>
 Número a convertir: $aDecimal<br>"."En decimal: " .bindec($aDecimal);
 echo "<hr><h3>Fecha Ingresada</h3>La fecha es $verfecha <br>";
 echo$verfecha=var_dump(checkdate(12, 31, 2022));
 echo "<hr><h3>Invertir texto</h3>El texto ingresado fue: $Oracion"."<br>Al invertirlo queda asi: " .strrev($Oracion)
 ."<h3><a href=\"conversiones.php\">Regresar</a><h3>";
    
 
?>