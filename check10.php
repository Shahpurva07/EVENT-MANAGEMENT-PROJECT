<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: loginform10.php");
exit(); }
?>