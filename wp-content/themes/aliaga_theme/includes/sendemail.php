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

}
