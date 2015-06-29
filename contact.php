<?php

if($_POST["csubmit"]) {
    $recipient="carina.burduja@gmail.com";
    $subject="GreenFood";
    $sender=$_POST["cname"];
    $senderEmail=$_POST["cemail"];
    $message=$_POST["cmessage"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

}
    header("Location: redirect2.html");
?>