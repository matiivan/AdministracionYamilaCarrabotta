<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    
    // Correo de destino
    $destinatario = "admyamilacarrabotta@gmail.com";
    
    // Asunto del correo
    $asunto = "Mensaje de contacto desde el sitio web";
    
    // Cuerpo del correo
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Email: $email\n";
    $cuerpo .= "Mensaje:\n$mensaje";
    
    // Cabeceras del correo
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "<p>Mensaje enviado correctamente.</p>";
    } else {
        echo "<p>Error al enviar el mensaje.</p>";
    }
}
?>
