<?php
if(issets($_POST['Submit']) {
    $name = $_POST['Name'];
    $phoneNumer = $_POST['PhoneNumber'];
    $subject = $_POST['Subject'];
    $mailFrom = $_POST['Mail'];
    $message = $_POST['Message'];

    $mailTo = "colin14@free.fr";
    $headers = "From: ".$mailFrom;
    $txt = "New message from web book: I'm ".$name.".\n\n".$message. "phone number:".$phoneNumer;


    mail($mailTo,$subject, $txt, $headers);
    header("Location: index.html?mailsend");
}
?>