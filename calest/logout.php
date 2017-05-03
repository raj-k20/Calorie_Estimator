<?php
error_reporting(0);
session_start();
$_SESSION['status']='LOGOUT';
echo '<marquee>You Have Been Successfully Logged Out</marquee>';
header("Location: index.html");
?>