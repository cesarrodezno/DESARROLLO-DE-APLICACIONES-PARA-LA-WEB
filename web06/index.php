<?php
    require("class/claseTablaMultiplicar.php");
    $numero = "";
    $resultado = "";
    if($_POST){
        $numero = $_POST["numero"];
        $objetoTabla = new ClaseTablaMultiplicar();
        $objetoTabla->establecerNumeroTabla($numero);
        $objetoTabla->generarTabla();
        $resultado = $objetoTabla->resultado;
    }

    echo "
    <html>
        <head>
            <title>César Rodezno - 164520</title>
            <script src='js/validacion.js'></script>
        </head>
        <form method='post' action='$_SERVER[PHP_SELF]' onsubmit='return validar();'>
        <table aling='center'>
            <tr>
                <td>Introduzca el n&uacute;mero de tabla:</td>
                <td><input type='number' name='numero' value='$numero'></td>
            </tr>
            <tr>
                <td colspan='2' aling='center'>
                    <input type='submit' value='Enviar' />
                </td>
            </tr>
        </table>
        <br><center>$resultado</center>
    </form>
    </html>
    ";
?>