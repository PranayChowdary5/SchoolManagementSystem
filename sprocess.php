<?php 
include("config.php")
?>	
<?php
$roll=$_POST['Roll'];
$email=$_POST['Email'];
$pass=$_POST['Password'];
$stream=$_POST['Stream'];
$course=$_POST['Course'];
$sem=$_POST['Sem'];
$att=$_POST['Attendance'];
$add=$_POST['Address'];
$fee=$_POST['Fees'];
$name=$_POST['Name'];

$query="INSERT INTO student values('$roll','$email','$pass','$stream','$course','$sem','$att','$add','$fee','$name')";
$data=mysqli_query($conn,$query) or die(mysqli_error($conn));

if($data){
	?><script type="text/javascript">
		alert("data inserted");
		window.location.href = 'newstudent.php?success=1';
	</script><?php
}
?>