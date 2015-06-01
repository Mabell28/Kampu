



<?php

@$nombre = addslashes($_POST['nombre']);
@$telefono = addslashes($_POST['telefono']);
@$mail = addslashes($_POST['mail']);
@$mensaje = addslashes($_POST['mensaje']);

$cabeceras ="From: $mail\n"
."Reply-To: $mail\n";
$asunto ="Mensaje de landing Kampu";
$mail ="lider@lider.com.pe";
$contenido ="$nombre ha enviado un mensaje\n"
."\n";



if(@mail($mail, $asunto, $contenido, $cabeceras, $mensaje)){
	die("Gracias, su mensaje ha sido enviado");
}
?>

