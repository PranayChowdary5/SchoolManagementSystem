<?php
session_start();
#connection code
$host ='localhost';
$user ='root';
$pass ='';
$dbname ='ums';
$conn = mysqli_connect($host,$user,$pass,$dbname) or die (mysql_error($conn));
#var_dump($conn)
?>