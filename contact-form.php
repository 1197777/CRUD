<?php
 include_once('connection.php');


 if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST ['mail'];
    $message = $_POST['message'];

   $mailTo = "1198084@student.roc-nijmegen.nl";
   $headers = "from: ". $mailFrom;
   $txt = "je hebt een email" .$name.".\n\n".$message;

   mail($mailTo, $subject, $txt, $headers);
   header("Location: index.php?mailsend");
 }