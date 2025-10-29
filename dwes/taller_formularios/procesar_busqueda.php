<?php
if (isset($_GET['termino_busqueda'])) {
    $termino = htmlspecialchars($_GET['termino_busqueda']);
} else {
    $termino = "Ningún termino introducido";
}

echo "<h1>Resultado de la búsqueda</h1>";
echo "<p>Has buscado: <strong>$termino</strong></p>";
?>