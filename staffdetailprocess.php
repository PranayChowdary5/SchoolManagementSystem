<?php 
include("config.php")
?>	
<?php
$id=$_POST['id'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$dob=$_POST['dob'];

$query="INSERT INTO staff values('$id','$name','$phone','$address','$dob')";
$data=mysqli_query($conn,$query) or die(mysqli_error($conn));

if($data){
	?><script type="text/javascript">
		alert("data inserted");
		window.location.href = 'newstaff.php?success=1';
	</script><?php
}
?>
