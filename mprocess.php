<?php 
include("config.php")
?>	
<?php
$sem = mysqli_real_escape_string($conn,$_POST['sem']);
$rollno=$_POST['rollno'];
$t1=$_POST['th1'];
$t2=$_POST['th2'];
$t3=$_POST['th3'];
$p1=$_POST['pr1'];
$p2=$_POST['pr2'];

if($sem=="Sem1")
{
$query="INSERT INTO semester1 values('$rollno','$t1','$t2','$t3','$p1','$p2')";
$data=mysqli_query($conn,$query) or die(mysqli_error($conn));
}
elseif($sem=="Sem2")
{
$query="INSERT INTO semester2 values('$rollno','$t1','$t2','$t3','$p1','$p2')";
$data=mysqli_query($conn,$query) or die(mysqli_error($conn));
}

if($data){
	?><script type="text/javascript">
		alert("data inserted");
		window.location.href = 'semestermarks.php?success=1';
	</script><?php
}
?>
