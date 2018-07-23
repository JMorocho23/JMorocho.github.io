<?php

    $name = $_Post['name'];
    $cEmail = $_Post['email'];
    $subject = $_Post['subject'];
    $message = $_Post['message'];
    

    $email_from = 'jc23ace@gmail.com';
    $body = "$message";

    $to = 'jc23ace@gmail.com';

    $headers ="From: $email_from \r\n";
    $headers .= "Reply-To: $cEmail \r\n";

    mail($to,$subject,$body,$headers);

    header("Location: index.html");

?>