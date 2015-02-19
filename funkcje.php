<?php

function pora_roku($pora) {
    if ($pora != '') {
        return $pora;
    }
    $miesiac = date('n');
    if ($miesiac == '12' || $miesiac == '1' || $miesiac == '2') {
        return 'zima';
    }
    if ($miesiac == '3' || $miesiac == '4' || $miesiac == '5') {
        return 'wiosna';
    }
    if ($miesiac == '6' || $miesiac == '7' || $miesiac == '8') {
        return 'lato';
    }
    if ($miesiac == '9' || $miesiac == '10' || $miesiac == '11') {
        return 'jesien';
    }
}

function licznik() {
    $stan = file_get_contents('licznik.txt');
    $stan = $stan + 1;
    file_put_contents('licznik.txt', $stan);
    return $stan;
}

function obsluz_formularz($post) {
    if (!empty($post)) {
        require 'PHPMailer-master/PHPMailerAutoload.php';


        $mail = new PHPMailer;
        $mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';

        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = "jan.machalica@gmail.com";
        $mail->Password = "JustynA1984!";
        
        
        $mail->setFrom('jan.machalica@gmail.com', 'Jan Machalica');
        $mail->addReplyTo('jan.machalica@gmail.com', 'Jan Machalica');
//Set who the message is to be sent to
        $mail->addAddress('justyna.machalica@gmail.com', 'Justyna Machalica');
        $mail->Subject = 'Luboń';
        
        $mail->msgHTML('jtfiutfyuftiutf');
        $mail->IsHTML(true);
        $mail->Body = 'sdfsgsdgsdgfd';
        $mail->AltBody = 'This is a plain-text message body';

//send the message, check for errors
        if (!$mail->send()) {
            return "Mailer Error: " . $mail->ErrorInfo;
        } else {
            return file_get_contents('potwierdzenie.html');
        }

        
    }
}
