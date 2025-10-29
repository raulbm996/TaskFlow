<?php
//NIVEL 1: LÓGICA CON FUNCIONES
//Problema 1: Calculadora de Descuentos Crea una función calcularDescuento($precio, $categoría) que aplique diferentes descuentos según la categoría de un producto
//Si la categoría es 'electronica', aplica un 15% de descuento.
//Si la categoría es 'ropa', aplica un 10% de descuento.
//Si la categoría es 'alimentacion', aplica un 5% de descuento. La función debe devolver el precio final después del descuento.

echo "<h2>NIVEL 1: LÓGICA CON FUNCIONES</h2> <br>";
echo "<h3>Problema 1: Calculadora de Descuentos</h3> <br>";
function calcularDescuento($precio, $categoría)
{
    if ($categoría == 'electronica') {
        return $precio = $precio - ($precio * 0.15);
    } else if ($categoría == 'ropa') {
        return $precio = $precio - ($precio * 0.1);
    } else if ($categoría == 'alimentacion') {
        return $precio = $precio - ($precio * 0.05);
    }
}

echo "Precio final con descuento: " . calcularDescuento(100, 'electronica') . "<br>"; // Ejemplo de uso
echo "Precio final con descuento: " . calcularDescuento(200, 'ropa') . "<br>"; // Ejemplo de uso
echo "Precio final con descuento: " . calcularDescuento(50, 'alimentacion');

//Problema 2: El Juego "FizzBuzz" Crea una función fizzBuzz($numero) que reciba un número y devuelva:
//"FizzBuzz" si el número es divisible por 3 y por 5.
//"Fizz" si el número es solo divisible por 3.
//"Buzz" si el número es solo divisible por 5.
//El propio número si no es divisible ni por 3 ni por 5.

echo "<h3>Problema 2: El Juego 'fizzBuzz'</h3> <br>";

function fizzBuzz($numero)
{
    if ($numero % 3 == 0 && $numero % 5 == 0) {
        return "FizzBuzz";
    } else if ($numero % 3 == 0) {
        return "Fizz";
    } else if ($numero % 5 == 0) {
        return "Buzz";
    } else {
        return $numero;
    }
}

echo fizzBuzz(15) . "<br>"; // Ejemplo de uso
echo fizzBuzz(9) . "<br>";  // Ejemplo de uso
echo fizzBuzz(7) . "<br>"; // Ejemplo de usoç

//Problema 3: Validador de Contraseña Crea una función validarContraseña($pass) que verifique la fortaleza de una contraseña y devuelva un string:
//"FUERTE" si tiene más de 8 caracteres, una mayúscula y un número.
//"MEDIA" si tiene más de 8 caracteres pero no cumple alguna de las otras dos condiciones.
//"DEBIL" si tiene 8 caracteres o menos. Pista: Puedes necesitar funciones nativas como strlen(), strtoupper() o is_numeric().

echo "<h3>Problema 3: Validador de Contraseña</h3> <br>";












?>