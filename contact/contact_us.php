<?php
if(isset($_POST['fullname']) && isset($_POST['msgbody'])) {
    $fullname = $_POST['fullname'];
    $subject = $_POST['subject'];
    $emailaddr = $_POST['emailaddr'];
    $body = $_POST['msgbody'];
} else {
    echo 'invalid args';
    exit();
}

$to = 'shini.number1@gmail.com';
$message = '
<html>
  <head>
    <title>Message from Client</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <style>
      html,body {
        font-family: "Roboto", sans-serif;
        background-color:#fafafa;
        color:darkslategray;
        margin:10px;
        padding:0;
      }
    </style>
  </head>
  <body>
    <p style="font-weight:bold">From: '.$fullname.' ('.$emailaddr.')</p>
	<p style="font-weight:bold">Subject: '.$subject.'</p>
	<p>Message:</p>
	<p>'.$body.'</p>
  </body>
</html>
';

// Headers
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'From: Portfolio Contact <contact@sinaghanbari.design>';

// Mail it!
if(mail($to, $subject, $message, implode("\r\n", $headers))) {
    //echo 'Message sent successfully';
    header('Location: http://sinaghanbari.design/contact/?success=y');
} else {
    echo 0;
}

?>
