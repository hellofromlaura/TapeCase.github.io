<?php
if($_POST["form_submitted"]) {
    $to = "laura@primamarketing.co";
    $subject = "New Landing Page Form Submission";
    $message = "
    <html>
        <head>
            <title>New Landing Page Form Submission</title>
        </head>
        <body style='text-align: center; font-family: Arial; font-size: 1.5em; color: #0d458f;'>
            <h1>Form Submission Information</h1>
            <p>Name: <span style='color: #7c7e7a;'>{$_POST["name"]}</span></p>
            <p>Email: <span style='color: #7c7e7a;'>{$_POST["email"]}</span></p>
            <p>Phone Number: <span style='color: #7c7e7a;'>{$_POST["phone"]}</span></p>
            <p>Message: <br> <span style='color: #7c7e7a;'>{$_POST["message"]}</span></p>
        </body>
    </html>
    ";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <webmaster@example.com>";
    mail($to, $subject, $message, $headers);
}
?>