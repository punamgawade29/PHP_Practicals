<?php
session_start();
unset($_SESSION["username"]);
header("Location:p13.2.php");
?>

