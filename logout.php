<?php
include 'dbconnection.php';
session_start();
session_unset();
session_destroy();
header("Location: SignIn.php");
exit;
?>
