<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Resultados</title>
</head>
<body>
    <form>
<?php
 if($_POST){
    $Tipo_pizza = $_POST["Tip_pizza"];
    $Tipo_masa = $_POST["Masa"];
    $Cantidad_pizzas = $_POST["numero"];
    $Medio_pedido = $_POST["Tip_pedido"];
    $Tipo_cliente = $_POST["Tip_cliente"];

    $precio= 0;
    $precio_masa = 0;
    $descuento = 0;
    $descuento_medio = 0;
    $descuento_cliente = 0;
    $descuento_Xpizza = 0;

    //los tipos de pizza que existen
    if($Tipo_pizza=="Perso"){
        $precio = 5;
    }else if($Tipo_pizza=="Grand"){
        $precio = 12;
    }else if($Tipo_pizza=="Giga"){
        $precio = 16;
    }

    //los tipos de masa que existen
    if($Tipo_masa=="Pan"){
        $precio_masa = 2;
    }else if($Tipo_masa=="Alta_M"){
        $precio_masa = 3;
    } 

    $preciosumado = $precio + $precio_masa;
    $Iva = $preciosumado * 0.13;
    $precio_iva = $preciosumado + $Iva;
    
    // Medio por donde se hizo el pedido
    if($Medio_pedido =="Tel"){
        $descuento_medio = number_format(($preciosumado + $Iva) * 0.05,2);
    }else if($Medio_pedido =="Internet"){
        $descuento_medio =  number_format(($preciosumado + $Iva) * 0.07,2);
    }else if($Medio_pedido =="Sucursal"){
        $descuento_medio =  number_format(($preciosumado + $Iva) * 0.03,2);
    }

    
    // tipos de clientes que se pueden elegir
    if($Tipo_cliente =="Frecuente"){
        $descuento_cliente = number_format(($preciosumado + $Iva) * 0.05,2);
    }else if($Tipo_cliente =="Grande"){
        $descuento_cliente  =  number_format(($preciosumado + $Iva) * 0.07,2);
    }else if($Tipo_cliente =="Empresarial"){
        $descuento_cliente  =  number_format(($preciosumado + $Iva) * 0.09,2);
    }
    $descuento= $descuento_medio + $descuento_cliente;
    $precio_descuento = $precio_iva - $descuento;

    if($Cantidad_pizzas == 2){
        $descuento_Xpizza = number_format($precio_descuento * 0.05,2);
    }else if($Cantidad_pizzas ==3){
        $descuento_Xpizza =  number_format($precio_descuento * 0.07,2);
    }else if($Cantidad_pizzas >3){
        $descuento_Xpizza =  number_format($precio_descuento * 0.10,2);
    }
    $precio_Cant = $precio_descuento * $Cantidad_pizzas;
    $Total = $precio_Cant - $descuento_Xpizza;

    echo "
    <h1>Resultados</h1>
   
    Tipo de Pizza: $Tipo_pizza <br>
    Tipo de masa: $Tipo_masa<br>
    Cantidad de Pizzas: $Cantidad_pizzas<br>
    Medio por el cual hizo su pedido: $Medio_pedido<br>
    Tipo de cliente: $Tipo_cliente<br>
    <hr><h2>Precios</h2>
    El tipo la pizza cuesta: $$precio<br>
    Precio de la masa para la pizza: $$precio_masa<br>
    Precio de pizza: $$preciosumado<br>
    Precio de pizza con Iva: $$precio_iva<br>
    El descuento por uso de medio es: $$descuento_medio<br>
    El descuento por cliente es: $$descuento_cliente<br>
    Descuento total: $$descuento<br>
    Precio de pizza ya con descuento: $$precio_descuento<br>
    El descuento por cantidad de pizzas: $$descuento_Xpizza<br>
    Precio por cantidad de Pizzas: $$precio_Cant <br>
    <hr><h3>Total a pagar: $$Total.</h3><br>
    <h3><a href=\"Menu.php\">Hacer otro pedido</a><h3>";
    ;

}
