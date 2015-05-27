



<?php

@$nombre = addslashes($_POST['nombre']);
@$telefono = addslashes($_POST['telefono']);
@$mail = addslashes($_POST['mail']);
@$mensaje = addslashes($_POST['mensaje']);

$cabeceras ="From: $mail\n"
."Reply-To: $mail\n";
$asunto ="Mensaje de la página web";
$mail ="mabellhuayanaytaype@gmail.com";
$contenido ="$nombre ha enviado un mensaje\n"
."\n";



if(@mail($mail, $asunto, $contenido, $cabeceras)){
	die("Gracias, su mensaje ha sido enviado");
}
?>

