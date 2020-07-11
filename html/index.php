<?php
require_once '../vendor/autoload.php';


// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465,'ssl'))
    ->setUsername('testmailer77@mail.ru')
    ->setPassword('#tc$$&PGLf%7zLj')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['testmailer77@mail.ru' => 'ravenguard.terra@gmail.com'])
    ->setTo(['ravenguard.terra@gmail.com'])
    ->setBody('Here is the message itself')
;

// Send the message
$result = $mailer->send($message);

var_dump($result);
