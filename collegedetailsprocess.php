<?php 
include("config.php")
?>	
<?php
$id=$_POST['id'];
$password=$_POST['password'];
$name=$_POST['name'];
$code=$_POST['code'];
$address=$_POST['address'];
$courses=$_POST['courses'];
$branch=$_POST['branch'];
$faculty=$_POST['faculty'];
$director=$_POST['director'];
$registrar=$_POST['registrar'];

$query="INSERT INTO collegedetails values('$id','$password','$name','$code','$address','$courses','$branch','$faculty','$director','$registrar')";
$data=mysqli_query($conn,$query) or die(mysqli_error($conn));

if($data){
	?><script type="text/javascript">
		alert("data inserted");
		window.location.href = 'collegedetails.php?success=1';
	</script><?php
}
?>
