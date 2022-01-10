<?php
header('Set-Cookie: cross-site-cookie=name; SameSite=None; Secure');
if(isset($_POST['submit'])){
    $to = "info@lagerday.com.ar";
    $name = $_POST['name'];
    $from = $_POST['email'];
    $bar = $_POST['bar'];
    $phone = $_POST['phone'];
    $subject = "Contacto Lager Day";

    $message = '<b>Nombre y Apellido: </b>' . $name ."\r\n" . "<b>Cervecería/Bar: </b>" . $bar . "\r\n" . " <b>Telefono de contacto: </b>" . $phone . "\r\n" ."<b>Mail de contacto: </b>" . $from;

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = "From: <$from> \r\n";

    mail($to, $subject, $message, implode("\r\n", $headers));



header('Location: index.html');
exit;
}

?>