<?php
    	$name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];

    $sql = "insert into contact values('.$name.','.$email.','.$subject.','.$message.');";
    $con = mysqli_connect("localhost","root","","registerr");
    mysqli_query($con, $sql);
header("Location: contact1.html");
?>