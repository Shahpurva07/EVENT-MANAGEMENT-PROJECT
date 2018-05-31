<?php
  $name = $_REQUEST['name'] ;  
  $email = $_REQUEST['email'] ;
    $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;

  mail( "purvakshah123@gmail.com", "Feedback Form Results",
    $message, "From: $email" );
  header( "Location: contact1.html" );
?>
