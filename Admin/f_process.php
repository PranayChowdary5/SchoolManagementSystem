<?php 
include("config.php")
?>	
<?php
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$add=$_POST['address'];
$degree=$_POST['degree'];

$query="INSERT INTO faculty values('$id','$name','$email','$pass','$dob','$phone','$fname','$mname','$add','$degree')";
$data=mysqli_query($conn,$query) or die(mysqli_error($conn));

if($data){
	?><script type="text/javascript">
		alert("data inserted");
		window.location.href = 'collegefaculty.php?success=1';
	</script><?php
}
?>
