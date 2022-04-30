function CantidadPizzas() {
    if (document.getElementById("numero").validity.valid)
        var Cant_pizza = document.getElementById("numero").value;
    alert("Cantidad de Pizzas: " + Cant_pizza);
    location.replace("Menu.php");
}