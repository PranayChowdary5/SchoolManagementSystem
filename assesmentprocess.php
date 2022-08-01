<?php 
include("config.php")
?>	
<?php
$subject = $_SESSION['ums']['subject'];

$ca = mysqli_real_escape_string($conn,$_POST['ca']);
$marks=$_POST['marks'];
$roll=$_POST['roll'];

if($subject=="math")
{
	if($ca=="ca1")
	{

$query="UPDATE math SET ca1='$marks' WHERE Roll='$roll'";
$data=mysqli_query($conn,$query) or die(mysqli_error($conn));
}
elseif($ca=="ca2")
	{

$query="UPDATE math SET ca2='$marks' WHERE Roll='$roll'";
$data=mysqli_query($conn,$query) or die(mysqli_error($conn));
}
if($ca=="ca3")
	{

$query="UPDATE math SET ca3='$marks'  WHERE Roll='$roll'";
$data=mysqli_query($conn,$query) or die(mysqli_error($conn));
}
elseif($ca=="ca4")
	{

$query="UPDATE math SET ca4='$marks'  WHERE Roll='$roll'";
$data=mysqli_query($conn,$query) or die(mysqli_error($conn));
}

}
if($subject=="physics")
{
	if($ca=="ca1")
	{

$query="UPDATE physics SET ca1='$marks' WHERE Roll='$roll'";
$data=mysqli_query($conn,$query) or die(mysqli_error($conn));
}
elseif($ca=="ca2")
	{

$query="UPDATE physics SET ca2='$marks' WHERE Roll='$roll'";
$data=mysqli_query($conn,$query) or die(mysqli_error($conn));
}
if($ca=="ca3")
	{

$query="UPDATE physics SET ca3='$marks'  WHERE Roll='$roll'";
$data=mysqli_query($conn,$query) or die(mysqli_error($conn));
}
elseif($ca=="ca4")
	{

$query="UPDATE physics SET ca4='$marks'  WHERE Roll='$roll'";
$data=mysqli_query($conn,$query) or die(mysqli_error($conn));
}



}


if($data){
	?><script type="text/javascript">
		alert("data inserted");
		window.location.href = 'assesment1.php?success=1';
	</script><?php
}
?>