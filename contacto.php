<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$whatsapp = $_POST['whatsapp'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$comentarios = $_POST['comentarios'];
$para = 'tecnomarema1@gmail.com';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\napellido: $apellido \nwhatsapp: $whatsapp\n E-Mail: $email\ncomentarios:\n $comentarios";
  
if ($_POST['submit']) {
if (mail($para, $asunto, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://www.tecnomarema.com.ar';
</script>";
} else {
echo 'Falló el envio';
}
}
?>