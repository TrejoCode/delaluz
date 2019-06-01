<?php

    $fullname = '';
    $email = '';
    $subject = '';
    $message = '';
    $to = 'ventas@tecnologiasdelaluz.com.mx';

    if(isset($_POST['fullname'])) { $fullname = $_POST['fullname']; }

    if (isset($_POST['email'])) { $email = $_POST['fullname']; }

    if (isset($_POST['subject'])) { $subject = $_POST[ 'subject']; }

    if (isset($_POST['message'])) { $message = $_POST[ 'message']; }

    $content = "Nombre" . $fullname . "\n" . "Correo: " . $email . "\n" . "Mensaje: " . $message;

    mail($to, $subject, $content);

    header('Location: https://www.tecnologiasdelaluz.com.mx/');
