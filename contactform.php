<?php 

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mailFrom'];
    $message = $_POST['message'];

    $mailTo = "admin@keenokthai.com";
    $headers = "From: ". $mailFrom;
    $txt = "You have received an e-mail from " .$name. ".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}

?>