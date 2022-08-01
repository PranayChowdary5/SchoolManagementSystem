<?php include ('config.php');?>
<?php
if($_SERVER['REQUEST_METHOD']==="POST") {

if(empty($_POST['id']) || empty($_POST['pass'])) {
	//die("Something went wrong");
	?> <script type="text/javascript">
		window.location.href("teacherlogin.php?error=1");
	</script> <?php
	exit;
}
# sanitize data
$id = mysqli_real_escape_string($conn,$_POST['id']);
$password = mysqli_real_escape_string($conn,$_POST['pass']);

# verifying
$qryStr = "SELECT * FROM faculty WHERE id = '$id' AND password = '$password'";
# execute
$execute = mysqli_query($conn,$qryStr) or die(mysqli_error($conn));
# if any rows found
$count = mysqli_num_rows($execute);

if($count==0) {
	?><script type="text/javascript">
		alert('Invalid user!!');
		window.location.href = "teacherlogin.php?invalid";

	</script><?php
} else {


	# a valid user
	$row = mysqli_fetch_array($execute);
	$_SESSION['ums'] = $row;

	header('Location:facultyindex.php?success');
	exit;
}
}
?>