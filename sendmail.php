<?php
$to_email = "f181580d@gmail.com";
$subject = "Sample Email from EasyFarming via PHP";
$body = "Hi, This is test email send by PHP Script from EasyFarming as test Kindly ignore it";
$headers = "From: easyfarming1512@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>