<?php

$emails = array("email1@example.com", "email2@example.com", "email3@example.com");
$subject = "This is the subject of the email";
$headers = array('Content-Type: text/html; charset=UTF-8');
foreach($emails as $email) {
    $message = file_get_contents( get_template_directory() . '/email-template.php');
    wp_mail( $email, $subject, $message, $headers );
}


// with include function same task
foreach($emails as $email) {
    ob_start();
    include( get_template_directory() . '/email-template.php');
    $message = ob_get_clean();
    wp_mail( $email, $subject, $message, $headers );
}





// Send mail with php


$emails = array("email1@example.com", "email2@example.com", "email3@example.com");
$subject = "This is the subject of the email";
$message = "This is the message of the email";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
foreach($emails as $email) {
    mail($email, $subject, $message, $headers);
}

// Using file_get_contents() function
foreach($emails as $email) {
    $message = file_get_contents('email-template.html');
    mail($email, $subject, $message, $headers);
}

// Using include function
foreach($emails as $email) {
    ob_start();
    include 'email-template.php';
    $message = ob_get_clean();
    mail($email, $subject, $message, $headers);
}

