<?php
    	$username = $_REQUEST['usernamesignup'];
        $password = $_REQUEST['passwordsignup'];
        
    $sql = "insert into user values('".$username."','".$password."');";
    $con = mysqli_connect("localhost","root","","info");
    mysqli_query($con, $sql);
?>
record inserted.