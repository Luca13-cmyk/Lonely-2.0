<?php

namespace Hcode;

use Rain\Tpl;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
class Mailer

{
    const USERNAME = "hydena788@gmail.com";
    const PASSWORD = "#Ln13131301!???";
    const NAME_FROM = "Hcode Store";
    const HOST = "smtp.gmail.com";
    const PORT = 587;

    private $mail;

    public function __construct($toAddress, $toName, $subject, $tplName, $data = array())
    {

    $config = array(
        "tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]."/views/email/",
        "cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
        "debug"         => false 
        );

    Tpl::configure( $config );

    $tpl = new Tpl;

    foreach ($data as $key => $value) {
        $tpl->assign($key, $value);
    }
    $html = $tpl->draw($tplName, true); // o true serve para jogar para variavel $html, evitando desenhar na tela
    
    //Create a new PHPMailer instance
    $this->mail = new PHPMailer;

    //Tell PHPMailer to use SMTP
    $this->mail->isSMTP();

    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    $this->mail->SMTPDebug = SMTP::DEBUG_OFF;

    //Set the hostname of the mail server
    $this->mail->Host = Mailer::HOST;
    // use
    // $this->mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $this->mail->Port = Mailer::PORT;

    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //Whether to use SMTP authentication
    $this->mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $this->mail->Username = Mailer::USERNAME;

    //Password to use for SMTP authentication
    $this->mail->Password = Mailer::PASSWORD;

    //Set who the message is to be sent from
    $this->mail->setFrom(Mailer::USERNAME, Mailer::NAME_FROM);

    //Set an alternative reply-to address
    // $this->mail->addReplyTo('replyto@example.com', 'First Last');

    //Set who the message is to be sent to
    $this->mail->addAddress($toAddress, $toName);

    //Set the subject line
    $this->mail->Subject = $subject;

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $this->mail->msgHTML($html);

    //Replace the plain text body with one created manually
    $this->mail->AltBody = 'This is a plain-text message body';

    //Attach an image file
    // $this->mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    
    }
    public function send()
    {
        return $this->mail->send();
    }
}

?>