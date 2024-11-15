<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'joelargana07@gmail.com';
    $mail->Password = 'joel05';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('joelargana07@gmail.com', 'Joel');
    $mail->addAddress('joelargana@ejemplo.com', 'Joel');

    $mail->isHTML(true);
    $mail->Subject = 'Nuevo mensaje de contacto';
    $mail->Body    = "Nombre: $first_name $last_name<br>Correo: $email<br><br>Mensaje:<br>$message";

    $mail->send();
    echo 'Mensaje enviado con éxito';
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}

?>
