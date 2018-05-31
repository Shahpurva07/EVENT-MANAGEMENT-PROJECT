<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: loginform6.php");
exit(); }
?>