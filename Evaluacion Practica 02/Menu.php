<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <script type="text/javascript" src="js/script.js"></script>
    <title>Pizzer&iacute;a</title>
</head>
<body>
    <form method="post" action="procesar.php">
    <img src="Img/Pizza log.jpg">
    <h1>Bienvenido, seleccione a su preferencia </h1>

    <p><h3><label>El precio est&aacute;ndar para las pizzas es el siguiente:
        <select name="Tip_pizza">
            <option value="Perso">Personal</option>
            <option value="Grand">Grande</option>
            <option value="Giga">Gigante</option>
           
        </select>

    </label></p>
    <p><label>Desea agregar alg&uacute;n tipo de masa en particular:
        <select name="Masa">
            <option value="Pan"> Pan Pizza </option>
            <option value="Alta_M">Masa Alta</option>
        </select>
    </label></p>

    <p><label>Por que medio hizo el pedido:
        <select name="Tip_pedido">
            <option value="Tel">Tel&eacute;fono</option>
            <option value="Internet">Internet</option>
            <option value="Sucursal">Desde Sucursal</option>
        </select>
    </label></p>
  
    <p><label> Cuantas Pizzas pedira:
        <input type="number" name="numero" id="numero" required>
    </label></p>

    <p><label>Que tipo de cliente es:
        <select name="Tip_cliente">
            <option value="Frecuente"> Frecuente</option>
            <option value="Grande"> Grande</option>
            <option value="Empresarial"> Empresarial</option>   	
        </select>
    </label></p>
    
</h3>
    <input type="submit" value="Hacer pedido">
    </form>
    
</body>
</html>