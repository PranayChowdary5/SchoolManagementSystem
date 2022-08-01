<?php
include("config.php");
session_start();
session_destroy();
//unset($_SESSION['student']);
header("Location:index.php?loggedout");
exit;
?>