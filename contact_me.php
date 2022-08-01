<?php 
include("config.php")
?>	
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];


$query="INSERT INTO contact values('$name','$email','$phone','$message')";
$data=mysqli_query($conn,$query) or die(mysqli_error($conn));

if($data){
	?><script type="text/javascript">
		alert("Message Send");
		window.location.href = 'contact.php?success=1';
	</script><?php
}
?>