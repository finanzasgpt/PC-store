<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $descripcion = htmlspecialchars($_POST['descripcion']);

    $to = "tuemail@example.com";
    $subject = "Nuevo Pedido de PC";
    $message = "Nombre: $nombre\nEmail: $email\nDescripción del Pedido: $descripcion";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Pedido enviado con éxito.";
    } else {
        echo "Error al enviar el pedido.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
