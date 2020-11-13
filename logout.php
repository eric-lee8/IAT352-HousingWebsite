<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["first_name"]);
unset($_SESSION["password"]);
header("Location:login.php");
?>