<?php include ('config.php');?>
<?php
if($_SERVER['REQUEST_METHOD']==="POST") {

if(empty($_POST['roll']) || empty($_POST['pass'])) {
	//die("Something went wrong");
	?> <script type="text/javascript">
		window.location.href("Studentlogin.php?error=1");
	</script> <?php
	exit;
}
# sanitize data
$roll = mysqli_real_escape_string($conn,$_POST['roll']);
$password = mysqli_real_escape_string($conn,$_POST['pass']);

# verifying
$qryStr = "SELECT * FROM student WHERE Roll = '$roll' AND Password = '$password'";
# execute
$execute = mysqli_query($conn,$qryStr) or die(mysqli_error($conn));
# if any rows found
$count = mysqli_num_rows($execute);

if($count==0) {
	?><script type="text/javascript">
		alert('Invalid user!!');
		window.location.href = "Studentlogin.php?invalid";

	</script><?php
} else {


	# a valid user
	$row = mysqli_fetch_array($execute);
	$_SESSION['ums'] = $row;

	header('Location:studentpage.php?success');
	exit;
}
}
?>