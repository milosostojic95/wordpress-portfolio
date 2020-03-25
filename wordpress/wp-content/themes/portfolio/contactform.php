<?php
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "milosostoja95@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received and e0mail from".$name.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
  }
