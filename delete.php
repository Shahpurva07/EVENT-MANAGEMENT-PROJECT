<?php
require('connect.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM new_record WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: admin1.php"); 
?>