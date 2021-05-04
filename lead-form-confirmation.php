<!DOCTYPE html>
<html data-wf-page="607daf16bc57f371deb2c6f8" data-wf-site="607daf16bc57f32f58b2c6f6">
    <head>
    <meta charset="utf-8">
    <title>TapeCase</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3257280-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-3257280-1');
    </script>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="images/webclip.png" rel="apple-touch-icon">
    </head>
    <body class="body">
    <div class="section-5">
        <div class="container-9 w-container">
            <a href="https://www.tapecase.com/">
                <img src="images/TapeCase_Logo_Est_BLUE.png" loading="lazy" sizes="(max-width: 479px) 38vw, (max-width: 991px) 21vw, 13vw" srcset="images/TapeCase_Logo_Est_BLUE-p-500.png 500w, images/TapeCase_Logo_Est_BLUE-p-800.png 800w, images/TapeCase_Logo_Est_BLUE-p-1080.png 1080w, images/TapeCase_Logo_Est_BLUE.png 1600w" alt="" class="image" style="margin-bottom:20px;">
            </a>
            <div class="text-block confirmation">
                Thank you for contacting us. We'll get in touch with you soon. <br>
                If you would like to learn more about our products headover to <br>
                <a class="button w-button center" href="https://www.tapecase.com/">TapeCase.com</a>
            </div>
        </div>
    </div>
    </body>
</html>


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