<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

if(isset($_POST['sendmail'])){
    $validator['success'] = false;
    $validator['errorMessage'] = "";

    if(trim($_POST['nombre']) ==""){
        $validator['errorMessage'] .= "Debes ingresar un nombre";
    }

    if(trim($_POST['email']) == ""){
        $validator['errorMessage'] .= "<br>Debes ingresar un e-mail";
    }

    if(!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)){
        $validator['errorMessage'] .= "<br>Ingresa un email válido";
    }

    if(trim($_POST['mensaje']) == ""){
        $validator['errorMessage'] .= "<br>Ingresa un mensaje";
    }

    if($validator['errorMessage'] == ""){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];

        $bodyMessage =<<<EOF
        <h4>Nuevo mensaje desde Web!</h4>
        <p><strong>{$nombre}</strong> desea ponerse en contacto contigo</p>
        <p>Su correo electr&oacute;nico eso <strong>{$email}</strong></p>
        <strong>Mensaje: </strong>
        <p>{$mensaje}</p>
        <marquee><strong>Zeus is the law!</strong></marquee>

EOF;
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'noreply.aliagaing@gmail.com';    // SMTP username
        $mail->Password = 'aliagaingenieria';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('noreply.aliagaing@gmail.com', 'Aliaga Ingenieria Contacto');
        $mail->addAddress('ignacio.ainolrivera@gmail.com');     // Add a recipient
        //$mail->addAddress('ignacio.ainolrivera@gmail.com', 'Zeus Millelche');

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "Nuevo Contacto V&iacutea Sitio web!";
        $mail->Body    = $bodyMessage;
        $mail->AltBody = 'Aliaga Ingeniería';

        $mail->send();
        $validator['message'] = 'Tu mensaje ha sido enviado.';


        $validator['success'] = true;
    }

    echo json_encode($validator);

}
