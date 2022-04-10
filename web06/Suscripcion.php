<?php
    require("class/listaSuscripcion.php");
    $objetoFormulario = new formularioSuscripcion();

    if(isset($_GET["idioma"])){
        $idioma = $_GET["idioma"]; 

        if($idioma!=""){
            $objetoFormulario->idiomaFormulario = $idioma;
        }
    }
    //Ejecuta la traduccion
    $objetoFormulario->traducirFormulario();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de Programacion Orientada a Objetos</title>
    <script src='js/validacion.js'></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
       <h1><?php echo $objetoFormulario->tituloFormulario; ?></h1>
            <table>
            <tr>
                <td><?php echo $objetoFormulario->Idioma; ?>:</td>
                <td><form name="formulario1" method="post" action="">
                    <select name="destinos" onchange="location.href=formulario1.destinos.value;">
                    <option value=""></option>
                    <option value="http://localhost/web06/Suscripcion.php?idioma=ES">Spanish</option>
                    <option value="http://localhost/web06/Suscripcion.php?idioma=EN">English</option>
                    <option value="http://localhost/web06/Suscripcion.php?idioma=IT">Italian</option>
                    </select>
                    </form>
             </td>
            </tr>
        </table>
       <form method='post' action='$_SERVER[PHP_SELF]' onsubmit='return validar();'>
            <label><?php echo $objetoFormulario->Correo; ?>:<br>
            <input type="text" name="correo" placeholder="" required></label><br>

            <label><?php echo $objetoFormulario->Nombre; ?>:<br>
            <input type="text" name="nombre" placeholder=""></label><br>

            <label><?php echo $objetoFormulario->Apellido; ?>:<br>
            <input type="text" name="apellido" placeholder=""></label><br>
            <input type="submit" name="suscribir" placeholder="" value="<?php echo $objetoFormulario->Suscribir; ?>"><br>
       </form>
</body>
</html>