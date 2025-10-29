<?php
$nombre = isset($_POST['nombre_contacto']) ? htmlspecialchars($_POST['nombre_contacto']) : "Sin nombre";
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : "Sin email";
$mensaje = isset($_POST['mensaje_contacto']) ? htmlspecialchars($_POST['mensaje_contacto']) : "Sin mensaje";

echo "<h1>Contacto recibido</h1>";
echo "<p>Gracias por tu mensaje, <strong>$nombre</strong>.<br>";
echo "Hemos recibido tu correo electrónico: <strong>$email</strong>.<br>";
?>