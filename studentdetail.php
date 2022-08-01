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
<h3>Student Details</h3><br>
<?php
$roll = $_SESSION['ums']['Roll'];

$querystring="SELECT * FROM student where Roll=$roll";
$execute=mysqli_query($conn,$querystring) or die(mysqli_error($conn));
#execute the abouve query
//var_dump($execute);
if(mysqli_num_rows($execute)>0){			//to find no. of rows inside a table
?>
<table style="width:50%"> 
	<tbody>
	<?php while($row=mysqli_fetch_array($execute)){ ?>
		<tr> 
			<th>Roll no</th> 
			<th><?php echo $row['Roll']?></th> 
		</tr> 
		<tr> 
			<td>Name</td> 
			<td><?php echo $row['Name']?></td>  
		</tr> 
		<tr> 
			<td>Email</td> 
			<td><?php echo $row['Email']?></td> 
		</tr> 
		<tr> 
			<td>Password</td> 
			<td><?php echo $row['Password']?></td>
		</tr> 
		<tr> 
			<td>Stream</td> 
			<td><?php echo $row['Stream']?></td>
		</tr> 
		<tr> 
			<td>Semester</td> 
			<td><?php echo $row['Sem']?></td>
		</tr> 
		<tr> 
			<td>Attendance</td> 
			<td><?php echo $row['Attendance']?></td>
		</tr> 
		<tr> 
			<td>Address</td> 
			<td><?php echo $row['Address']?></td>
		</tr> 
		<tr> 
			<td>Fees</td> 
			<td><?php echo $row['Fees']?></td>
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