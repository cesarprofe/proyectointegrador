<?php
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];
$headers = "From: " . $correo . "\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail('cesar.antonio.astorga@gmail.com','Enviado desde mi portafolio', $mensaje,$headers);

echo '
    <p>Hola '.$nombre. '! Su mensaje: '.$mensaje. ' se a enviado correctamente</p>
';

?>