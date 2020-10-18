<?php

$string = file_get_contents("config.json");
$option = json_decode($string);

define("MAIL_HOST", $option->MAIL_HOST);
define("MAIL_TITLE", $option->MAIL_TITLE);



if( !empty($_POST['name']) && !empty($_POST['email']) && isset($_POST['phone-number']) && isset($_POST['message'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['phone-number'];
    $msg = nl2br($_POST['message']);
    if (MAIL_HOST != null) {
        $to = MAIL_HOST;
    } else {
        $to = "info@thebusinessdigitalsolutions.co.za";
    }
    $from = $email;
    if (MAIL_TITLE != null) {
        $subject = MAIL_TITLE;
    } else {
        $subject = '[Consulting] Contact Form Message';
    }
    $message = '<b>Name:</b> '.$name.'<b>Contact Number:</b> '.$contact.'<br><b>Email:</b> '.$email.' <br> <p>'.$msg.'</p>';
    $headers = "From: $from\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";

    if( mail($to, $subject, $message, $headers) ) {
        $serialized_data = "Success! Message Successfully submitted. Thank you, We will get back to you soon!";
        echo $serialized_data;
    } else {
        $serialized_data = "Warning! Message sending failed. Please send again later!";
        echo $serialized_data;
    }
}else{
    echo"Fill All Form Fields To Proceed!";
}