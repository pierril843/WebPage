<?php

if($_POST["submit"]) {
    $recipient="pierril843@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    if (mail($recipient, $subject, $mailBody)) {
      echo ("Message successfully sent!");
    } else {
      echo ("Message delivery failed...");
    }
}
?>
