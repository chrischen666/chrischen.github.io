<?php
session_start();
unset($_SESSION['login_member']);
unset($_SESSION['login_type']);
header("location:/login.php");
?>
