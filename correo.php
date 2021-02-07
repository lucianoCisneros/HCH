<?php
    $destinatario = 'hch@hch.com.ar';
    $nombre = $_GET['nombre'];
    $email = $_GET['email'];
    $telefono = $_GET['telefono'];
    $asunto = $_GET['asunto'];
    $mensaje = $_GET['mensaje'];

    $header = "Enviado desde HCH.com.ar";
    $mensajeCompleto = "Nombre: " . $nombre . "\nEmail: ". $email . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script> alert('Correo enviado exitosamente') </script>";
    echo "<script> setTimeout(\"location.href='index.html'\", 1000) </script>";
?>