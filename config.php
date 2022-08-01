<?php
#connection code
    session_start();
    // $_SESSION['loggedin'] = 1;

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'ums';
$conn=mysqli_connect($host,$user,$pass,$dbname) or die(mysqli_error($conn));
//var_dump($conn);


?>

<?php

if(isset($_SESSION['ums'])){
include("header1.php");
}
else{
	include("header.php");
}
?>