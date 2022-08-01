`<?php 
include("config.php")
?>	
<?php
$roll = $_SESSION['ums']['Roll'];
$email=$_POST['Email'];
$pass=$_POST['Password'];
$add=$_POST['Address'];

if(empty($email)){
	$email = $_SESSION['ums']['Email'];
}
if(empty($pass)){
	$pass = $_SESSION['ums']['Password'];
}
if(empty($add)){
	$add = $_SESSION['ums']['Address'];
}
$query="UPDATE student SET Email='$email',Password='$pass',Address='$add' WHERE Roll='$roll'";
$data=mysqli_query($conn,$query) or die(mysqli_error($conn));

if($data){
	?><script type="text/javascript">
		alert("data inserted");
		window.location.href = 'studentpage.php?success=1';
	</script><?php
}
?>