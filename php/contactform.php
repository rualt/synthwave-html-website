<?php

if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "rurgar@mail.ru";
        $subjest = "Synthwave website message from" . $name;
        $headers = "From: ".$mailFrom;
        $txt = "You have recieved an email from ".$name.".\n\n".$message;


        mail($mailTo, $subjest, $txt, $headers);
        header("Location: index.php?mailsend");
}