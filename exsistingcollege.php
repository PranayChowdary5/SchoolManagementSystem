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
<h3>College Details</h3><br>
<?php
$id=$_POST['id'];

$querystring="SELECT * FROM collegedetails where id=$id";
$execute=mysqli_query($conn,$querystring) or die(mysqli_error($conn));
#execute the abouve query
//var_dump($execute);
if(mysqli_num_rows($execute)>0){			//to find no. of rows inside a table
?>
<table style="width:50%"> 
	<tbody>
	<?php while($row=mysqli_fetch_array($execute)){ ?>
		<tr> 
			<th>College Id</th> 
			<th><?php echo $row['id']?></th> 
		</tr> 
		
		<tr> 
			<td>College Name</td> 
			<td><?php echo $row['Name']?></td> 
		</tr> 
		<tr> 
			<td>College Code</td> 
			<td><?php echo $row['code']?></td>
		</tr> 
		<tr> 
			<td>College Address</td> 
			<td><?php echo $row['address']?></td>
		</tr> 
		<tr> 
			<td>College Courses</td> 
			<td><?php echo $row['courses']?></td>
		</tr> 
		<tr> 
			<td>Branches offered</td> 
			<td><?php echo $row['branch']?></td>
		</tr> 
		<tr> 
			<td>Number of Faculty</td> 
			<td><?php echo $row['faculty']?></td>
		</tr> 
		<tr> 
			<td>Name Of Director</td> 
			<td><?php echo $row['director']?></td>
		</tr> 
		<tr> 
			<td>Name Of Resistrar</td> 
			<td><?php echo $row['registrar']?></td>
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