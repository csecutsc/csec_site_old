<?php
if(isset($_POST['submit'])) {
    $to      = 'gabriel.jsh@gmail.com';
    $subject = 'Critterpit Bug Report';
    $message = 'Name: ' . ($_POST['Name']) 
      . "\n" . 'Email: ' . ($_POST['Email']) 
      . "\n" . 'Message: ' . ($_POST['Message']);

    mail($to, $subject, $message);

    $popUp = "Your feedback has been recorded. Thank you";
    echo "<script type='text/javascript'>alert('$popUp');</script>";

    header( "refresh:0;url=index.html" );
} 
else {
  header('Location: index.html');
}
?>