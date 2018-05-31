<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: loginform12.php");
exit(); }
?>