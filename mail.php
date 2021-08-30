<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


// Verifica de onde veio e trata

if( isset($_POST['mensagem']) ){

    $corpo = "<h1>Novo contato do seu site!</h1><br>".
                "<h3>Origem: Formulário de contato</h3><br>".
                "<p>Nome: {$_POST['nome']}</p><br>".
                "<p>E-mail: {$_POST['email']}</p><br>".
                "<p>Telefone: {$_POST['telefone']}</p><br>".
                "<p>Mensagem: {$_POST['mensagem']}</p><br>";
                
}elseif( isset($_POST['telefone']) ){

    $corpo = "<h1>Novo contato do seu site!</h1><br>".
                "<h3>Origem: CTA da home</h3><br>".
                "<p>Nome: {$_POST['nome']}</p><br>".
                "<p>E-mail: {$_POST['email']}</p><br>".
                "<p>Telefone: {$_POST['telefone']}</p><br>";
                
}else{

    $corpo = "<h1>Novo contato do seu site!</h1><br>".
                "<h3>Origem: Nesletter</h3><br>".
                "<p>E-mail: {$_POST['email']}</p><br>";

}



try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'user@example.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';

    //Recipients
    $mail->setFrom('nao-responda@elementorh.com.br', 'Elemento RH');
    $mail->addAddress('contato@elementorh.com.br');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Novo contato do seu site!';
    $mail->Body    = $corpo;

    $mail->send();
    
    echo ("<script language='JavaScript'>
            window.alert('Mensagem enviada com sucesso!');
            window.location.href='index.php';
            </script>");

} catch (Exception $e) {
    echo ("<script language='JavaScript'>
            window.alert('Erro ao enviar mensagem, tente novamente mais tarde!');
            window.location.href='index.php';
            </script>");
}
