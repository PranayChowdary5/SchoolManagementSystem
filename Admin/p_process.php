<?php 
include("Admin_config.php")
?>	
<?php
$pname=$_POST['Name'];
$roll=$_POST['Roll'];
$password=$_POST['Password'];
$stream=$_POST['Stream'];
$course=$_POST['Course'];
$sem=$_POST['Sem'];
$att=$_POST['Attendance'];
$add=$_POST['Address'];
$fee=$_POST['Fee'];
  // $file_name = $_FILES['pictures']['name'];
  //       $file_size = $_FILES['pictures']['size'];
  //       $file_type = $_FILES['pictures']['type'];

      
  //       if($file_size>8000000){
  //       	//die("file size error");
  //       	echo "File size exceeds!!";
  //       	exit;
  //       }else{
  //       	#lets check file type
  //       	if($file_type=="image/png" or $file_type=="image/jpg" or $file_type=="image/jpeg" or $file_type=="image/JPG" or $file_type=="image/JPEG" or $file_type=="image/gif" or $file_type=="image/png"){
  //       		//all good to go
  //       		$folder="pictures"; 
  //       		if (!file_exists($folder)){
  //       			mkdir($folder);
  //       		}
  //       		$destination = $folder.'/'. rand (0000,9999).'_'.$file_name;
  //       		$tmpsource =$_FILES["pictures"]["tmp_name"];
  //       		#upload the file
  //       		$status = move_uploaded_file($tmpsource, $destination) or die($_FILES['image']['error']);
  //       			//var_dump($status);
  //       	} else {
  //       		echo "sorry! File type incorrect expected : Image file";
  //       		exit;
  //       	}
  //       } 
$query="INSERT INTO student values('$roll','$email','$password','$stream','$course','$sem','$att','$add','$fee','$name')";
$data=mysqli_query($conn,$query) or die(mysqli_error($conn));

if($data){
	?><script type="text/javascript">
		alert("data inserted");
		window.location.href = 'admin_college.php?success=1';
	</script><?php
}
?>
