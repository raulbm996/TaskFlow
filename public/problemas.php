<?php
//Problema 1.1: Perfil de Usuario
$Nombre = "Raul"; //String
$Apellidos = "Borreguero Muñoz"; //String
$Edad = 20; //Integer
$Altura = 1.80; //Float
$EsEstudiante = true; //Boolean

echo "<h2>Perfil de Usuario</h2>";
echo "<strong>Nombre: </strong> $Nombre <br>";  //Salida en el navegador: Raul
echo "<strong>Apellidos: </strong>$Apellidos <br>"; //Salida en el navegador: Borreguero Muñoz
echo "<strong>Edad: </strong>$Edad <br>"; //Salida en el navegador: 20
echo "<strong> Altura: </strong>$Altura <br>"; //Salida en el navegador: 1.80
echo "<strong>¿Es estudiante: ? </strong>$EsEstudiante "; //Salida en el navegador: 1 (true)

//Problema 1.2: Información de un Producto
$NombreProducto = "Portátil"; //String
$Precio = 799.99; //Float
$StockDisponible = 15; //Integer
$EstaEnOferta = true; //Boolean

echo "<h2>Información de un Producto</h2>";
echo "<strong>Nombre del Producto: </strong>$NombreProducto <br>"; //Salida en el navegador: Portátil
echo "<strong>Precio: </strong>$Precio €<br>"; //Salida en el navegador: 799.99€
echo "<strong>Stock Disponible: </strong>$StockDisponible <br>"; //Salida en el navegador: 15
echo "<strong>¿Está en Oferta?: </strong>$EstaEnOferta "; //Salida en el navegador: (true)

//Problema 1.3: Constantes de la Aplicación
define("NOMBRE_SITIO", "Mi Tienda Online"); //String
define("VERSION_APP", "1.0"); //float

echo "<h2>Constantes de la Aplicación</h2>";
echo "<strong>Nombre del Sitio: </strong>" . NOMBRE_SITIO . "<br>"; //Salida en el navegador: Mi Tienda Online
echo "<strong>Versión de la Aplicación: </strong>" . VERSION_APP; //Salida en el navegador: 1.0

//Problema 2.1: Calculadora básica
$num1 = 10;
$num2 = 5;
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = $num1 / $num2;

echo "<h2>Calculadora Básica</h2>";
echo "<strong>Suma: </strong>$suma <br>"; //Salida en el navegador: suma
echo "<strong>Resta: </strong>$resta <br>"; //Salida en el navegador: resta
echo "<strong>Multiplicación: </strong>$multiplicacion <br>"; //Salida en el navegador: multiplicación
echo "<strong>División: </strong>$division <br>"; //Salida en el navegador: división

//Problema 2.2: Actualización de Stock
$stock = 100;

echo "<h2>Actualización de Stock</h2>";
echo "<strong>Stock Inicial: </strong>$stock <br>"; //Salida en el navegador: stock inicial

//Simulación de venta de 25 productos
$productosVendidos = 25;
$stock -= $productosVendidos; //Actualización del stock

echo "<strong>Stock Actualizado Después de Ventas: </strong>$stock"; //Salida en el navegador: stock actualizado

//Simulación de llegafa de 50 nuevos productos
$productosNuevos = 50;
$stock += $productosNuevos; //Actualización del stock

echo "<br><strong>Stock Después de Nuevas Llegadas: </strong>$stock"; //Salida en el navegador: stock después de nuevas llegadas

//Problema 2.3: Concatenación de Textos
$nombre = "Oskar";
$apellido = "Calvo";
$curso = "Desarrollo Web en Entorno Servidor";
$fraseCompleta = "El profesor " . $nombre . " " . $apellido . " imparte el curso de " . $curso;

echo "<h2>Concatenación de Textos</h2>";
echo $fraseCompleta; //Salida en el navegador: El profesor Oskar Calvo imparte el curso de Desarrollo Web en Entorno Servidor

//Problema 2.4: Concatenaciones Simples
$edad = 20;
$edadMinima = 18;
$contraseñaGuardada = "1234";
$contraseñaUsuario = "123";

echo "<h2>Concatenaciones Simples</h2>";
var_dump($edad >= $edadMinima); //Salida en el navegador: bool(true) si la edad es mayor o igual a la edad mínima, de lo contrario bool(false)
var_dump($contraseñaUsuario === $contraseñaGuardada); //Salida en el navegador: bool(true) si la contraseña del usuario coincide con la contraseña guardada, de lo contrario bool(false)

//Problema 2.5: ¿Par o impar?
echo "<h2>¿Par o Impar?</h2>";

$numero = 7;
if ($numero % 2 == 0) {
    echo "<br>El número $numero es par.";
} else {
    echo "<br>El número $numero es impar.";
}

//Problema 3.1: Control de acceso
echo "<h2>Control de Acceso</h2>";

$edad = 17;
if ($edad >= 18) {
    echo "<br>Acceso permitido. Eres mayor de edad.";
} else {
    echo "<br>Acceso denegado. Eres menor de edad.";
}

//Problema 3.2: Calificación de Examen
echo "<h2>Calificación de Examen</h2>";

$nota = 7.5;
if ($nota >= 9) {
    echo "<br>Calificación: Sobresaliente";
} elseif ($nota >= 7) {
    echo "<br>Calificación: Notable";
} elseif ($nota >= 5) {
    echo "<br>Calificación: Aprobado";
} else {
    echo "<br>Calificación: Suspenso";
}

//Problema 3.3: Menú del Día con switch
echo "<h2>Menú del Día con switch</h2>";

$diaSemana = "Lunes";

switch ($diaSemana) {
    case "Lunes":
        echo "Hoy tenemos lentejas en el menú";
        break;
    case "Miercoles":
        echo "Hoy tenemos paella en el menú";
        break;
    case "Viernes":
        echo "Hoy tenemos pescado al horno en el menú";
        break;
    default: //Se ejecuta si $diaSemana no es ninguno de los anteriores
        echo "Hoy no hay menú del día";
        break;

        echo $diaSemana;
}

//Problema 3.4: Verificación de Usuario Avanzada
echo "<h2>Verificación de Usuario Avanzada</h2>";
$rolUsuario = "admin";
$usuarioActivo = "true";

if ($rolUsuario == "admin" && $usuarioActivo == "true") {
    echo "Acceso concedido";
} else {
    echo "Acceso denegado";
}

//Problema 4.1: Tabla de Multiplicar del 7


?>