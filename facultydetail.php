<?php include('config.php');?><br><br><br><br><br><br><br><br>


<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
	<!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
<body>
	<style> 
		table, th, td { 
			border: 1px solid black; 
			border-collapse: collapse; 
		} 
		
		th, td { 
			padding: 20px; 
		} 
		
		th { 
			text-align: left; 
		} 
	</style> 
<h3>FACULTY DETAILS</h3><br>
<?php
$id = $_SESSION['ums']['id'];

$querystring="SELECT * FROM faculty where id=$id";
$execute=mysqli_query($conn,$querystring) or die(mysqli_error($conn));
#execute the abouve query
//var_dump($execute);
if(mysqli_num_rows($execute)>0){			//to find no. of rows inside a table
?>
<table style="width:50%"> 
	<tbody>
	<?php while($row=mysqli_fetch_array($execute)){ ?>
		<tr> 
			<th>ID</th> 
			<th><?php echo $row['id']?></th> 
		</tr> 
		<tr> 
			<th>Name</th> 
			<td><?php echo $row['Name']?></td>  
		</tr> 
		<tr> 
			<th>Email</th> 
			<td><?php echo $row['email']?></td> 
		</tr> 
		<tr> 
			<th>Password</th> 
			<td><?php echo $row['password']?></td>
		</tr> 
		<tr> 
			<th>DOB</th> 
			<td><?php echo $row['dob']?></td>
		</tr> 
		<tr> 
			<th>PHONE</th> 
			<td><?php echo $row['phone']?></td>
		</tr> 
		<tr> 
			<th>Attendance</th> 
			<td><?php echo $row['phone']?></td>
		</tr> 
		<tr> 
			<th>FATHERS NAME</th> 
			<td><?php echo $row['fname']?></td>
		</tr> 
		<tr> 
			<th>MOTHERS NAME</th> 
			<td><?php echo $row['mname']?></td>
		</tr> 
		<tr> 
			<th>ADDRESS</th> 
			<td><?php echo $row['address']?></td>
		</tr> 
		<tr> 
			<th>DEGREE</th> 
			<td><?php echo $row['degree']?></td>
		</tr> 
		<tr> 
			<th>SUBJECT</th> 
			<td><?php echo $row['subject']?></td>
		</tr> 
		<?php } ?>
</tbody>
	</table> 
<?php
}
else{
	echo "No data found!";
}
?>
</body>
</html>

<br><br><br><br><br>
<?php include('footer.php');?>