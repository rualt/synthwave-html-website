<?php

if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];
        $mailTo = "rualt_public_email@mail.ru";
        $subjest = "Synthwave website message from" . $name;
        $headers = "From: ".$mailFrom;
        $txt = "You have recieved an email from ".$name.".\n\n".$message;

        mail($mailTo, $subjest, $txt, $headers);
        header("Location: /about.html?status=success");
} else {
    header("Location: /about.html?status=fail");
}