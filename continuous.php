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
<h3>Continuous Assessment Marks</h3><br>
<?php
$roll = $_SESSION['ums']['Roll'];

$querystring="SELECT * FROM math,physics  where math.Roll=$roll && physics.Roll=$roll";
$execute=mysqli_query($conn,$querystring) or die(mysqli_error($conn));
#execute the abouve query
//var_dump($execute);
if(mysqli_num_rows($execute)>0){			//to find no. of rows inside a table
?>
<table style="width:50%"> 
	<tbody>
	<?php while($row=mysqli_fetch_array($execute)){ ?>
		<tr> 
			<th>SUBJECT</th> 
			<th>CA1</th> 
			<th>CA2</th>
			<th>CA3</th>
			<th>CA4</th>
			
		</tr> 
		<tr> 
			<th>MATHS</th> 
			<td><?php echo $row['1']?></td> 
			<td><?php echo $row['2']?></td>
			<td><?php echo $row['3']?></td> 
			<td><?php echo $row['4']?></td> 
		</tr> 
		<tr> 
			<th>PHYSICS</th>  
			<td><?php echo $row['6']?></td> 
			<td><?php echo $row['7']?></td> 
			<td><?php echo $row['8']?></td> 
			<td><?php echo $row['9']?></td> 

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