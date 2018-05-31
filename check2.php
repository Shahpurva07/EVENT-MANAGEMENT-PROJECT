<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: loginform2.php");
exit(); }
?>