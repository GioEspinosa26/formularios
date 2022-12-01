<?php

$destinatario = 'giovanyramos13@gmail.com';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde la pagina Calzado Veloz";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $mensaje, $mensajeCompleto, $header);
echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",2000)</script>"
?>